<div class="container-fluid newsletterbg mt-80">
            <div>
                <h2 class="newsltrh1 mt-40"> Never Miss A thing</h2>
                <p class="newsdecs mb-20">Get the latest scoop on all things vegan.</p>
                 <form class="form-inline" action="<?php echo base_url(); ?>newsletter" name="nfform" method="post"   onSubmit="return validateNl()">
                  <div class="form-group mt-10">
                    <div>
                      <input type="text" name="Email" class="form-control newsinpt other" placeholder="Email">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success subbtn">SUBSCRIBE</button>
                  <div id="Email"></div>
                </form>
            </div>
        </div>