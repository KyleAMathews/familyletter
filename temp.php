<?php

familyletter_start_storing(8);
familyletter_start_storing(9);
familyletter_start_storing(10);
familyletter_start_storing(11);
familyletter_start_storing(12);
familyletter_start_storing(13);

familyletter_stop_storing(10);
familyletter_stop_storing(11);


familyletter_store_email(8, "this is an email or something like that");
familyletter_store_email(8, "this is an email or something like that2");
familyletter_store_email(8, "this is an email or something like that3");
familyletter_store_email(9, "this is an email or something like that");
familyletter_store_email(9, "this is an email or something like that2");
familyletter_store_email(9, "this is an email or something like that3");

familyletter_send_stored_emails(9);
