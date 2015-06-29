#cathy-brown

Wordpress site utilising a customised version of the [wpex-elegant] (http://wpexplorer-demos.com/elegant/) theme.


###Directory structure
    root/
  
         local-dev/     < local gulp task runner and sass.
         wordpress/     < all wordpress files, ready to upload with FTP.

###local-dev files structure

We follow a modular sass structure.

    root/local-dev/

         gulpfile.js                < all gulp tasks to watch and compile sass.
         scss/                      < all sass.
              _base.scss            < base sass - imported for use in every file.
              _misc.scss
              _typography.scss
              cathybrown.scss       < the main sass import file.
              blocks/               < blocks - eg, a header or footer.
              elements/             < elements - eg, the page title element, social share icons.
              modules/              < sass specific modules - config/variables, mixins, colours, custom columns.
              view-specific/        < view/page specific sass.

Sass is compiled into CSS here:

    /wordpress/wp-content/themes/wpex-elegant/styles/cathy-brown.min.css

###General workflow (for style updates)
- run gulp locally, watch for changes
- upload `cathy-brown.min.css` to the server with FTP.
- check changes on the relevant wordpress URL.
- commit and push your changes.

Obviously, pure wordpress files can be edited and uploaded with FTP. 
