<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "e2cba3e1bdb721cc2e323ee12e0e8f5f73521e932b" ) {
if ( file_put_contents ( "/home4/webprphi/public_html/projectbook/wp-content/themes/book-theme/single-book.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home4/webprphi/public_html/projectbook/wp-content/plugins/aceide/backups/themes/book-theme/single-book_2020-09-25-08-40-35.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?>