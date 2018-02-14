This version is ‘3.01’
============================================================

Theme’s instruction is in the folder ‘document/instruction’. Please open that folder and open the file ‘index.html’ with your browsers.

============================================================

==v3.01== 20/05/2017
update responsive
	- stylesheet/style-responsive.css
	
fix ics file
	- include/hotel-event.php

fix minor bugs
	- gdlr-hotel/include/gdlr-reservation-bar.php
	- gdlr-hotel/include/gdlr-booking-item.php
	- gdlr-hostel/include/gdlrs-reservation-bar.php
	- gdlr-hostel/include/gdlrs-booking-item.php

fix payment message
	- gdlr-hotel/hotel-event.php	
	- gdlr-hostel/gdlrs-hotel-event.php

update authorize payment api
	- gdlr-hotel/include/authorize-payment.php
	- gdlr-hotel/include/payment-api/authorize.php
	- gdlr-hotel/framework/gdlr-transaction.php
	- gdlr-hostel/include/gdlrs-authorize-payment.php
	- gdlr-hostel/include/payment-api/authorize.php
	- gdlr-hostel/framework/gdlrs-transaction.php

==v3.00== 19/03/2017
fix 2 column footer style
	- footer.php

wp 4.5 compatibility issue
	- framework/function/gdlr-tax-meta.php

add new style option
	- archive.php
	- functions.php
	- style.css
	- include/gdlr-font-controls.php
	- include/gdlr-admin-option.php
	- include/gdlr-include-script.php
	- include/function/gdlr-function-regist.php
	- framework/function/gdlr-admin-panel-html.php
	- framework/javascript/gdlr-admin-panel-html.js
	- framework/stylesheet/gdlr-admin-panel-html.css

add option to sync using icalendar
block the date on the calendar in which the hotel is full or closed 
check coupon using ajax function
fix transaction payment type (email) displaying
add reply-to to email
improve coupon when the price is 0
fix pay amount option for room booking 
fix hostel private room booking
add link to email 
add color and filter for transaction type
add option to disable the adult and children number ( hotel )
improve the compatibility with polylang plugin
format the date to wordpress date format
shows check in/booking date in transaction table
move the code column as payment infomation in transaction table
add booking date/checkin date column
add sort option to transaction page
add minimum night to stay
add maximum selected room number
add option to always select the service
add block room option in each room page
add option for different paypal account / branches
add checkin time
add summary report
	- gdlr-hotel/single-room.php
	- gdlr-hotel/gdlr-hotel.php
	- gdlr-hotel/gdlr-hotel.js
	- gdlr-hotel/gdlr-hotel.css
	- gdlr-hotel/framework/gdlr-room-option.php
	- gdlr-hotel/framework/table-management.php
	- gdlr-hotel/framework/gdlr-transaction.php
	- gdlr-hotel/framework/gdlr-summary-report.php
	- gdlr-hotel/framework/transaction-style.css
	- gdlr-hotel/framework/plugin-option.php
	- gdlr-hotel/framework/service-opiton.php
	- gdlr-hotel/include/page-builder-sync.php
	- gdlr-hotel/include/gdlr-reservation-bar.php
	- gdlr-hotel/include/gdlr-utility.php
	- gdlr-hotel/include/gdlr-price-calculation.php
	- gdlr-hotel/include/gdlr-booking-item.php
	- gdlr-hotel/include/gdlr-room-item.php
	- gdlr-hotel/include/paypal-payment.php

	- gdlr-hostel/single-room.php
	- gdlr-hostel/gdlr-hotel.js
	- gdlr-hostel/gdlr-hotel.css
	- gdlr-hostel/framework/gdlrs-room-option.php
	- gdlr-hostel/framework/gdlrs-table-management.php
	- gdlr-hostel/framework/gdlrs-transaction.php
	- gdlr-hostel/framework/transaction-style.css
	- gdlr-hostel/framework/plugin-option.php
	- gdlr-hotel/framework/service-opiton.php
	- gdlr-hostel/include/page-builder-sync.php
	- gdlr-hostel/include/gdlrs-booking-item.php
	- gdlr-hostel/include/gdlrs-price-calculation.php
	- gdlr-hostel/include/gdlrs-reservation-bar.php
	- gdlr-hostel/include/gdlrs-utility.php
	- gdlr-hostel/include/gdlrs-room-item.php
	- gdlr-hostel/include/gdlrs-paypal-payment.php

update importer to show original image instead of the placeholder.
	- goodlayers-importer plugin

fix icon shortcode
	- goodlayers-shortcode plugin

update font awesome
	- plugins/font-awesome-new folder

change hotel search default adult number to 2
	- include/page-builder-sync.php

Fix gallery pagination on homepage
	- include/function/gdlr-media.php

==v2.08== 22/04/2016
- fix room showing from single
- fix draft / in trash room from showing
- wpml compatibility
- coupon issues when the vat is not defined

	gdlr-hotel
	include/gdlr-booking-item.php

	gdlr-hostel
	include/gdlrs-booking-item.php

- Updated Master Slider

==v2.07== 22/03/2016
- fix wpml query compatibility
- fix time zone problem
	gdlr-hotel
	include/gdlr-booking-item.php
	gdlr-hotel.js
	
	gdlr-hostel
	include/gdlr-booking-item.php
	gdlr-hotel.js
	
- master slider

==v2.06== 15/02/2016
- add revision feature
	gdlr-revision.php
	functions.php

==v2.05== 02/02/2016
- fix shortcode spacing
	include/plugin/shortcode-generator.php

-gdlr-hotel	
-fix coupon display after the contact page
	include/gdlr-booking-item.php
	
-gdlr-hostel
-fix coupon display after the contact page
	include/gdlrs-booking-item.php

==v2.04== 23/12/2015
fix date displaying bug / fix date translation
 - gdlr hotel plugin
 	gdlr-hotel.js file
 - gdlr hostel plugin
  	gdlr-hotel.js file

==v2.03== 20/12/2015
fix bug when night num more than 9
LMS Russian translation by : Vlada
	gdlr-hotel/gdlr-hotel.js
	gdlr-hotel/include/gdlr-reservation-bar.php
	gdlr-hotel/include/page-builder-sync.php
	
	gdlr-hostel/gdlr-hotel.js
	gdlr-hostel/include/gdlrs-reservation-bar.php
	gdlr-hostel/include/gdlrs-page-builder-sync.php
	
- wp 4.4 compatibility
	framework/javascirpt/gdlr-sidebar-generator.js
	include/function-blog-item.php
	
- update master slider

==v2.02== 24/10/2015
- update master slider

PLUGIN 
- fix authorize payment
	gdlr-hotel/framework/plugin-option.php
	gdlr-hotel/include/gdlrs-authorize-payment.php
	
	gdlr-hostel/framework/plugin-option.php
	gdlr-hostel/include/gdlrs-authorize-payment.php

- fix price calculation on special season ( * with date range )
	gdlr-hotel/include/gdlr-price-calculation.php
	gdlr-hotel/gdlr-hotel.js
	gdlr-hostel/include/gdlr-price-calculation.php
	gdlr-hostel/gdlr-hotel.js

==v2.01== 26/08/2015
- add max num option (bug fixed)
	gdlr-hotel/framework/room-option.php
- fix button shortcode
	gdlr-shortcode plugin

==v2.00== 24/08/2015
- shortcode fix
	==gdlr-shortcode plugin
	include/function/gdlr-utility.php
- hostel fully supported
- add compatibility with wpml
- fix multiple room selection
- change adult number if max people is less than 2
- validate check-in check-out date
- option to block booking date
- unlimited seasonal pricing
- new services, facilities manager
- additional chargeable services
	== hotel plugin’s files
	framework/service-option.php
	framework/gdlr-transaction.php
	framework/transaction-style.css
	include/gdlr-booking-item.php
	include/gdlr-reservation-bar.php
	include/gdlr-price-calculation.php
	include/gdlr-room-option.php
	include/gdlr-room-item.php
	gdlr-hotel.js

	== theme’s files
	include/gdlr-admin-option.php
	include/gdlr-page-builder-option.php
	include/function/gdlr-page-item.php
	include/widget folder
	framework/function/gdlr-admin-panel-html.php
	framework/stylesheet/gdlr-admin-panel-html.css
	framework/javascript/gdlr-admin-panel-html.js

==v1.11== 22/06/2015
- fix multiple room available booking
	gdlr-hotel plugin

==v1.10== 11/05/2015
- update localization ability for date-picker
- fix shortcode in room page
	gdlr-hotel plugin
	
- dark color for dropdown option
	include/gdlr-admin-option.php

- single room responsive
	stylesheet/style-responsive.css
	
- xss
	include/plugin/class-tgm-plugin-activation.php

==v1.00== 10/04/2015
* initial released 