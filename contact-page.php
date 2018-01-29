<?php
/*
 * Template Name: Contact Page
 */

?>

<?php get_header() ?>
<main>
    <div class="mainContent">
        <div class="col-md-12">
            <div class="col-md-3">

            </div>
            <div class="contact-form col-md-6">
                <div class="text-center">
                    <h2>Contact form</h2>
                </div>
                <div class="form form-horizontal">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Topic"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Send</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>
