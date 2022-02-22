/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
config.allowedContent = true; 
config.extraAllowedContent = '*(*)';

};
CKEDITOR.on('dialogDefinition', function(ev) {
    var editor = ev.editor;
    var dialogName = ev.data.name;
    var dialogDefinition = ev.data.definition;

    if (dialogName == 'image') {
        var infoTab = dialogDefinition.getContents( 'info' );
        infoTab.remove( 'txtBorder' ); //Remove Element Border From Tab Info
        infoTab.remove( 'txtHSpace' ); //Remove Element Horizontal Space From Tab Info
        infoTab.remove( 'txtVSpace' ); //Remove Element Vertical Space From Tab Info
        infoTab.remove( 'txtWidth' ); //Remove Element Width From Tab Info
        infoTab.remove( 'txtHeight' ); //Remove Element Height From Tab Info
        infoTab.remove( 'ratioLock' ); 
       
    }
});