<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Promotion extends MY_Model{
    
    public function getPromotions(){
        $CurrentDate = date("Y-m-d");
        $Query = $this->db->query("SELECT promotions.idPromotion,promotions.idPackage,promotions.idVendor,
            promotions.promotionStartDate,promotions.promotionEndDate,promotions.promotionalDiscount,promotions.`Timestamp`,
            packages.packageName,packages.packageDescription,packages.packageCost,packages.hotelType,packages.destinationCountry,
            packages.departureDate,packages.arrivalDate,packages.numberOfNights,packages.numberOfDays,packages.departureCity,
            packages.arrivalCity,packages.`Timestamp`,packages.packageSlug,
(packages.packageCost-(packages.packageCost/100*promotions.promotionalDiscount)) as PromotionalPackageCost,countries.countryName,package_pictures.packagePicture
FROM
promotions
INNER JOIN packages ON promotions.idPackage = packages.idPackage
INNER JOIN countries ON packages.destinationCountry = countries.idCountry
INNER JOIN package_pictures ON package_pictures.idPackage = packages.idPackage
WHERE
promotions.promotionStartDate <= DATE('$CurrentDate') AND promotions.promotionEndDate >= DATE('$CurrentDate')");
        
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
    
    public function getPromotionInfoByPackageID($idPackage){
        $Query = $this->SelectAllWhere("promotions", array("idPackage"=>$idPackage));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
    
    public function getAllPromotionsidPackage($idVendor){
        $Query = $this->db->query("select idPackage from promotions where idVendor='$idVendor'");
        if ($Query->num_rows() > 0){
            foreach ($Query->result() as $Result){
                $idPackage[] = $Result->idPackage;
            }
            return $idPackage;
        }
    }
    
}