DROP TABLE IF EXISTS admin_table;

CREATE TABLE `admin_table` (
  `Admin_id` varchar(30) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Age` int(4) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time(5) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Admin_id`),
  UNIQUE KEY `Admin_email` (`Email`),
  UNIQUE KEY `Phone` (`Phone`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO admin_table VALUES("ADMIN-303929-0","ama","meberak","new","bininew12@gmail.com","meberak","NTg4Nzg3","993799437","male","35","2022-07-14","02:47:53.00000","1");
INSERT INTO admin_table VALUES("ADMIN-346483-0","ama","fgmani","new","hgbjew12@gmail.com","admin2","YWRtaW4y","32565625","Female","26","2022-07-13","00:42:00.00000","1");
INSERT INTO admin_table VALUES("ADMIN-320341-0","ama","mabk","new","jhgjhbnew12@gmail.com","admin","YWRtaW4=","233233","male","32","2022-07-13","00:39:48.00000","1");


DROP TABLE IF EXISTS cashier_table;

CREATE TABLE `cashier_table` (
  `Cashier_id` varchar(15) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Middle_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Age` int(4) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time(4) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Cashier_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`),
  UNIQUE KEY `Phone` (`Phone`),
  UNIQUE KEY `Cashier_id` (`Cashier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO cashier_table VALUES("CASH-382000-0","ama","dfdf","new","dfdfnew12@gmail.com","cashier2","Y2FzaGllcjI=","12233332","Female","25","2022-07-13","00:46:39.0000","1");
INSERT INTO cashier_table VALUES("CASH-328398-0","ama","cashier","new","ererew12@gmail.com","cashier","Y2FzaGllcg==","122121212","male","32","2022-07-13","00:45:39.0000","1");


DROP TABLE IF EXISTS customer_order;

CREATE TABLE `customer_order` (
  `Customer_id` varchar(50) NOT NULL,
  `med_id` varchar(50) NOT NULL,
  `Drug_name` varchar(50) NOT NULL,
  `Comapany_name` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Action` varchar(50) NOT NULL DEFAULT 'pending',
  `presc_image` text NOT NULL,
  `presc1_image` text NOT NULL,
  `NO2` int(11) NOT NULL AUTO_INCREMENT,
  `Delivery_date` date DEFAULT NULL,
  `Delivery_time` time(3) NOT NULL,
  `Delivery_options` text NOT NULL,
  `Customer_city` text NOT NULL,
  `Customer_address` text NOT NULL,
  `Payment_image` text NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'pending',
  `Prescription` varchar(50) NOT NULL,
  `Mobile_num` varchar(50) NOT NULL,
  PRIMARY KEY (`NO2`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

INSERT INTO customer_order VALUES("CUS-98318-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","18.72","3","solid","517473941","2022-06-20","Finished","prescription_order/presc5.jpg"," ","48","2022-06-22","04:57:00.000","Delivered to home","Shashe","3rd floor","payment_image/presc6.png","pending","yes","");
INSERT INTO customer_order VALUES("CUS-98318-0","48","DrNATcURE 500 ml","CRESCENZIA TRADETECH PVT LTD(india).","297.99","1","liquid","1188052113","2022-06-20","payed"," "," ","45","2022-06-15","15:50:00.000","Delivered to home","Addis ","3rd floor","payment_image/presc6.png","pending","no","");
INSERT INTO customer_order VALUES("CUS-98318-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","120.38","2","Drops(liquid)","157019626","2022-06-20","pending","prescription/presc3.png","payment_image/presc3.png","46","2022-05-31","05:05:00.000","Delivered to home","Adam","3rd floor","payment_image/presc3.png","pending","yes","");
INSERT INTO customer_order VALUES("CUS-98318-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","12.48","2","solid","1524590602","2022-06-20","Finished","prescription_order/presc4.png"," ","47","2022-06-20","16:12:00.000","Delivered to home","Shashe","Bishoftu","payment_image/presc5.jpg","Prescription image is not visible please carefully retake a picture!","yes","");
INSERT INTO customer_order VALUES("CUS-98318-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","601.9","10","Drops(liquid)","1721923747","2022-06-22","Finished","prescription/presc6.png","payment_image/presc6.png","49","2022-06-23","14:37:00.000","Pick Up","Addis Abeba","25 gf","payment_image/presc6.png","pending","yes","2519257544");
INSERT INTO customer_order VALUES("CUS-98318-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","12.48","2","solid","618650045","2022-06-22","payed","prescription_order/presc6.png"," ","50","2022-06-08","12:37:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc7.png","pending","yes","656565");
INSERT INTO customer_order VALUES("CUS-98318-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","120.38","2","Drops(liquid)","229786413","2022-06-22","Finished","prescription/presc5.jpg","payment_image/presc7.png","51","2022-06-14","12:47:00.000","Delivered to home","Addis Abeba","shashemene","payment_image/presc7.png","Prescription image is not visible please carefully retake a picture!","yes","251477");
INSERT INTO customer_order VALUES("CUS-98318-0","48","DrNATcURE 500 ml","CRESCENZIA TRADETECH PVT LTD(india).","893.97","3","liquid","2115555521","2022-06-22","Finished"," "," ","52","2022-06-16","12:46:00.000","Delivered to home","Addis Abeba","G+4","payment_image/presc5.jpg","pending","no","2548998");
INSERT INTO customer_order VALUES("CUS-98318-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","120.38","2","Drops(liquid)","1413954603","2022-06-22","payed","prescription/presc6.png","payment_image/presc5.jpg","53","2022-06-07","00:50:00.000","Pick Up","Hawasa","G+5","payment_image/presc5.jpg","pending","yes","25417888");
INSERT INTO customer_order VALUES("CUS-98318-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","12.48","2","solid","1926952606","2022-06-24","pending","prescription_order/presc6.png"," ","54","2022-06-03","08:51:00.000","Delivered to home","Addis Abeba","2 rd","payment_image/presc6.png","pending","yes","245458888");
INSERT INTO customer_order VALUES("CUS-98318-0","44","OROFER Syrup 300ml"," Emcure Pharmaceuticals Ltd(india)","530.8","4","Syrup(liquid)","1699955788","2022-06-24","Finished","prescription_order/presc5.jpg"," ","55","2022-06-21","17:03:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc6.png","pending","yes","21235488");
INSERT INTO customer_order VALUES("CUS-98318-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","12.48","2","solid","591146919","2022-07-07","Finished","prescription/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","payment_image/images.png","56","2022-07-14","10:30:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/images.png","pending","yes","255666");
INSERT INTO customer_order VALUES("CUS-98318-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","18.72","3","solid","909041191","2022-07-12","Finished","prescription/presc5.jpg","payment_image/presc6.png","57","2022-07-07","20:48:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc6.png","Prescription image is not visible please carefully retake a picture!","yes","123456785");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","120.38","2","Drops(liquid)","1210403240","2022-07-14","pending","prescription/presc4.png","payment_image/presc5.jpg","78","2022-06-28","17:56:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/presc5.jpg","pending","yes","0974604623");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","218.96","1","liquid","2114495081","2022-07-14","Finished"," "," ","59","2021-09-16","03:17:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","5445545");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","437.92","2","liquid","720851638","2022-07-14","Finished"," "," ","60","2021-07-07","03:22:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","35556");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","218.96","1","liquid","904651299","2022-07-14","Finished"," "," ","61","2021-08-18","05:24:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","655656");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","437.92","2","liquid","387964607","2022-07-14","Finished"," "," ","62","2021-12-09","03:28:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","66555");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","437.92","2","liquid","1434387658","2022-07-14","Finished"," "," ","63","2022-01-05","03:30:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","555556");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","875.84","4","liquid","1824389809","2022-07-14","Finished"," "," ","64","2021-08-02","03:30:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","5556565");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","437.92","2","liquid","980372887","2022-07-14","Finished"," "," ","65","2021-07-08","03:43:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","555665");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","656.88","3","liquid","878448135","2022-07-14","Finished"," "," ","66","2022-07-13","03:45:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","2568532");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","656.88","3","liquid","1636820491","2022-07-14","Finished"," "," ","67","2022-07-13","03:45:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","2568532");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","437.92","2","liquid","1434624406","2022-07-14","Finished"," "," ","68","2022-07-13","03:47:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","25652");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","218.96","1","liquid","611457687","2022-07-14","Finished"," "," ","69","2022-07-07","03:48:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","678787877788");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","437.92","2","liquid","2122755670","2022-07-14","Finished"," "," ","70","2022-07-19","03:51:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/presc3.png","pending","no","1245555");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","875.84","4","liquid","2061572931","2022-07-14","Finished"," "," ","71","2022-07-13","03:53:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","12252522");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","218.96","1","liquid","2039423617","2022-07-14","Finished"," "," ","72","2022-07-05","07:28:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","1222221");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","218.96","1","liquid","738396675","2022-07-14","Finished"," "," ","73","2022-07-13","00:00:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/images.png","pending","no","0993799437");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","60.19","1","Drops(liquid)","1126159213","2022-07-14","pending","prescription/presc4.png","payment_image/presc7.png","74","2022-06-29","15:31:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc7.png","pending","yes","234564544");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","875.84","4","liquid","1119418442","2022-07-14","Finished"," "," ","75","2022-06-30","00:00:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc7.png","pending","no","0993799437");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","240.76","4","Drops(liquid)","2138419271","2022-07-14","pending","prescription/presc6.png","payment_image/presc6.png","77","2022-06-29","15:48:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc6.png","pending","yes","12345");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","120.38","2","Drops(liquid)","1247202046","2022-07-14","pending","prescription/presc5.jpg","payment_image/presc6.png","79","2022-07-13","00:00:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/presc6.png","pending","yes","0974604623");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","60.19","1","Drops(liquid)","447838263","2022-07-14","pending","prescription/presc5.jpg","payment_image/presc5.jpg","80","2022-07-19","00:00:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/presc5.jpg","pending","yes","0974604623");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","60.19","1","Drops(liquid)","1535899982","2022-07-14","pending","prescription/presc4.png","payment_image/presc4.png","81","2022-07-03","00:00:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc4.png","pending","yes","0974604");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","60.19","1","Drops(liquid)","1319182346","2022-07-14","Finished","prescription/presc6.png","payment_image/presc3.png","82","2022-06-26","00:00:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/presc3.png","Prescription image is not visible please carefully retake a picture!","yes","097456");
INSERT INTO customer_order VALUES("CUS-37846-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","656.88","3","liquid","1734496330","2022-07-14","Finished"," "," ","83","2022-07-12","00:00:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/presc7.png","pending","no","0993799437");
INSERT INTO customer_order VALUES("CUS-37846-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","60.19","1","Drops(liquid)","1764869631","2022-07-14","Finished","prescription/Capture.PNG","payment_image/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","84","2022-07-04","20:44:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","pending","yes","12345678");
INSERT INTO customer_order VALUES("CUS-37846-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","12.48","2","solid","174130149","2022-07-14","Finished","prescription/stcord1.png","payment_image/stock_icon.png","85","2022-06-27","00:00:00.000","Pick Up","Addis Abeba","Addis abeba","payment_image/stock_icon.png","Prescription image is not visible please carefully retake a picture!","yes","1233466776");
INSERT INTO customer_order VALUES("CUS-37846-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","6.24","1","solid","78474255","2022-07-14","Finished","prescription/download (1).jfif","payment_image/download.png","86","2022-07-19","17:10:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/download.png","pending","yes","097460");
INSERT INTO customer_order VALUES("CUS-55791-0","52","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","218.96","1","liquid","648749560","2022-07-14","Finished"," "," ","87","2022-07-04","20:23:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/download.png","pending","no","0993799437");
INSERT INTO customer_order VALUES("CUS-55791-0","46","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","1023.23","17","Drops(liquid)","178585355","2022-07-14","Finished","prescription/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","payment_image/stock_icon.png","88","2022-07-05","20:31:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/stock_icon.png","Prescription image is not visible please carefully retake a picture!","yes","363666");
INSERT INTO customer_order VALUES("CUS-55791-0","37","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","18.72","3","solid","10803796","2022-07-14","payed","prescription_order/download.png"," ","89","2022-06-29","23:10:00.000","Delivered to home","Addis Abeba","Addis abeba","payment_image/stock_icon.png","pending","yes","5666656");


DROP TABLE IF EXISTS customer_prescription;

CREATE TABLE `customer_prescription` (
  `NO` int(11) NOT NULL AUTO_INCREMENT,
  `prec_Image1` text NOT NULL,
  `Drug_name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Comapany_name` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Proceed` char(4) NOT NULL DEFAULT '1',
  `Delete` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Customer_id` varchar(50) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

INSERT INTO customer_prescription VALUES("44","prescription_order/presc4.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("43","prescription_order/presc7.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("42","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("45","prescription_order/presc7.png","","0","","1"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("46","prescription_order/presc3.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("47","prescription_order/presc4.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("48","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("49","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("50","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("51","prescription_order/presc7.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("52","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("53","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("54","prescription_order/presc2.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("55","prescription_order/presc4.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("56","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("57","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("58","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("59","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("60","prescription_order/presc4.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("61","prescription_order/presc4.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("62","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("63","prescription_order/presc7.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("64","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("65","prescription_order/presc6.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("66","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("67","prescription_order/presc5.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("68","prescription_order/presc7.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("69","prescription_order/presc7.png","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("70","","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("71","prescription_order/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","","0","","0"," "," 0"," ","443434343","25","CUS-98318-0");
INSERT INTO customer_prescription VALUES("72","prescription_order/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","","0","","0"," "," 0"," ","443434343","26","CUS-98318-0");
INSERT INTO customer_prescription VALUES("73","prescription_order/presc4.png","","0","","0"," "," 0"," ","443434343","26","CUS-98318-0");
INSERT INTO customer_prescription VALUES("74","prescription_order/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","","0","","0"," "," 0"," ","443434343","26","CUS-98318-0");
INSERT INTO customer_prescription VALUES("75","prescription_order/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","","0","","0"," "," 0"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("76","prescription_order/presc4.png","","0","","0"," ","1"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("77","prescription_order/presc7.png","","0","","0"," "," 0"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("78","prescription_order/presc3.png","","0","","0"," "," 0"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("79","prescription_order/presc4.png","","0","","0"," "," 0"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("80","prescription_order/presc3.png","","0","","0"," "," 0"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("81","prescription_order/presc4.png","","0","","0"," "," 0"," ","124444","25","CUS-37846-0");
INSERT INTO customer_prescription VALUES("82","prescription_order/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","","0","","0"," "," 0"," ","987654321","25","CUS-55791-0");
INSERT INTO customer_prescription VALUES("83","prescription_order/download.png","","0","","0"," "," 0"," ","987654321","25","CUS-55791-0");


DROP TABLE IF EXISTS customer_table;

CREATE TABLE `customer_table` (
  `Customer_id` varchar(15) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Middle_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Age` int(4) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(5) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `Customer_id` (`Customer_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO customer_table VALUES("CUS-75475-0","ama","mabk","new","nbhjhw12@gmail.com","cdd","Y2Rk","32433434","male","32","2022-07-12","23:47:22.00000","1");
INSERT INTO customer_table VALUES("CUS-39129-0","ama","dff","new","bdfdffnew12@gmail.com","abcde","YWJjZGU=","124585","male","26","2022-07-12","23:46:13.00000","1");
INSERT INTO customer_table VALUES("CUS-62104-0","abc","abc","abc","abcw12@gmail.com","abc","YWJj","1245778","male","25","2022-07-12","23:45:13.00000","1");
INSERT INTO customer_table VALUES("CUS-37846-0","meberak","meberak","meberak","mebarekw12@gmail.com","meberak","bWViZXJhaw==","124444","Female","25","2022-07-13","00:03:22.00000","1");
INSERT INTO customer_table VALUES("CUS-55791-0","Abebe","Abebe","new","ttttnew12@gmail.com","abebe","YWJlYmU=","987654321","Male","25","2022-07-14","20:14:49.00000","1");


DROP TABLE IF EXISTS feedback_customer;

CREATE TABLE `feedback_customer` (
  `feedback` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `customer_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO feedback_customer VALUES("see veary","2022-07-14","01:15:56","Abebe Kebede Alemu");
INSERT INTO feedback_customer VALUES("yood","2022-07-12","15:48:30","meberak meberak");
INSERT INTO feedback_customer VALUES("nice pharma","2022-07-12","16:13:54","meberak meberak");
INSERT INTO feedback_customer VALUES("amoxa","2022-07-12","16:18:46","meberak meberak");
INSERT INTO feedback_customer VALUES("amoxilin","2022-07-12","16:19:14","meberak meberak");
INSERT INTO feedback_customer VALUES("take one","2022-07-12","21:35:32","meberak meberak");
INSERT INTO feedback_customer VALUES("please accept your idea","2022-07-14","20:44:45","Abebe Abebe");


DROP TABLE IF EXISTS manager_post;

CREATE TABLE `manager_post` (
  `Date` date NOT NULL,
  `time` time NOT NULL,
  `post_test` text NOT NULL,
  `post_file` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO manager_post VALUES("2022-07-12","16:25:01","kool","img/med6.png");
INSERT INTO manager_post VALUES("2022-07-12","16:25:32","vbv","img/download (1).jfif");


DROP TABLE IF EXISTS manager_table;

CREATE TABLE `manager_table` (
  `manager_id` varchar(15) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Middle_name` varchar(15) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Age` int(4) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time(5) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`manager_id`),
  UNIQUE KEY `manager_id` (`manager_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO manager_table VALUES("MANEGE-101237-0","ama","new","new","dfddffw12@gmail.com","manager3","bWFuYWdlcjM=","122145545","Female","25","2022-07-13","09:48:54.00000","1");
INSERT INTO manager_table VALUES("MANEGE-101449-0","ama","alem","new","ddfdinew12@gmail.com","manager2","bWFuYWdlcjI=","33232223","Female","33","2022-07-13","00:44:15.00000","1");
INSERT INTO manager_table VALUES("MANEGE-101799-0","ama","alem","new","bininew12@gmail.com","manager","bWFuYWdlcg==","233332233","male","22","2022-07-13","00:43:10.00000","1");


DROP TABLE IF EXISTS pharmacist_table;

CREATE TABLE `pharmacist_table` (
  `pharmacist_id` varchar(60) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Middle_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Age` int(4) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time(5) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`pharmacist_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pharmacist_table VALUES("PHA-101033529-0","ama","zssssdsd","new","bininew12@gmail.com","ddddddddfd","MTIzNDU2Nzg=","5432","Female","11","2022-07-14","15:18:41.00000","1");
INSERT INTO pharmacist_table VALUES("PHA-103364252-0","pharma2","pharma2","pharma2","pharma2new12@gmail.com","pharma2","cGhhcm1hMg==","332222","male","25","2022-07-14","09:26:44.00000","1");
INSERT INTO pharmacist_table VALUES("PHA-102413443-0","pharma","pharma","pharma","pharmanew12@gmail.com","pharma","cGhhcm1h","1235454","Female","25","2022-07-14","09:25:46.00000","1");


DROP TABLE IF EXISTS register_drug;

CREATE TABLE `register_drug` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` text NOT NULL,
  `Drug_name` varchar(250) NOT NULL,
  `Comapany_name` varchar(40) NOT NULL,
  `Number_drug` int(8) NOT NULL,
  `Product_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Price` float NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time(4) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Benefits` varchar(1000) NOT NULL,
  `Directions` varchar(1000) NOT NULL,
  `Safety` varchar(1000) NOT NULL,
  `Side_Effect` varchar(1000) NOT NULL,
  `Prescription` varchar(10) NOT NULL DEFAULT 'yes',
  `Status` varchar(50) NOT NULL DEFAULT 'Available',
  PRIMARY KEY (`med_id`),
  UNIQUE KEY `drugname` (`Drug_name`)
) ENGINE=MyISAM AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;

INSERT INTO register_drug VALUES("46","images/med6.png","Ferium XT Drops 15ml"," Emcure Pharmaceuticals Ltd(india)","16","2014-05-18","2024-05-26","60.19","Drops(liquid)","2022-07-07","12:40:54.0000","For treatment and prevention of iron and folic acid deficiency i.e. anaemia, characterised by weakness, fatigue, difficulty in breathing, headache, irritability and difficulty in concentration.","For treatment and prevention of iron and folic acid deficiency i.e. anaemia, characterised by weakness, fatigue, difficulty in breathing, headache, irritability and difficulty in concentration.","Always take FERIUM XT exactly as your doctor has told you\nIt is important to shake the bottle for at least 10 seconds before use","Tell your doctor before taking FERIUM XT, if you are taking any other medicine including medicines obtained without prescription or any other supplements or herbal products.","FERIUM XT may cause nausea, vomiting, stomach upset, headache, black stools, abdominal discomfort or pain or other allergic reactions, although not everybody gets them","yes","Available");
INSERT INTO register_drug VALUES("37","images/med1.png","Amicline Tablet (10s)"," Franco Indian Pharmaceuticals Pvt Ltd","6","2014-12-01","2024-01-07","6.24","solid","2022-07-06","23:37:27.0000","Amicline Tablet 10s belongs to the class of (antiprotozoal) primarily used to treat worm infections like an intestinal worm and intestinal amaebiasis.   ","It is used to treat acute and chronic intestinal amoebiasis","Always take this medicine exactly as your doctor has told you\nIf you take more AMICLINE\nIf you take too many medicines than your prescribed dose, tell your doctor or go to the nearest hospital\nIf you forget to take AMICLINE\nTake it as soon as you remember, and then go back to taking your medicine as you would normally\n Do not take a double dose to make up for the dose that you missed\nIf you stop taking AMICLINE\nDo not stop taking this medicine without advice from your doctor","Talk to your Doctor if you:Are allergic to any of the other ingredients of this medicine","Skin reddening, rash, itching, difficulty in breathing or swelling\nFlatulence  \nDiarrhoea, vomiting\nStomach pain\nLoss of appetite\nHeadache\nDizziness","yes","Available");
INSERT INTO register_drug VALUES("44","images/med3.png","OROFER Syrup 300ml"," Emcure Pharmaceuticals Ltd(india)","0","2014-05-19","2025-05-10","132.7","Syrup(liquid)","2022-07-12","21:53:10.0000","Orofer Syrup 300 ml belongs to a class of haematinics primarily used to treat anaemia. Iron deficiency occurs mainly due to poor diet","Orofer Syrup 150 ml belongs to a class of haematinics primarily used to treat anaemia. Iron deficiency occurs mainly due to poor diet, poor absorption of food or increased folate use in the body (during pregnancy).","Tablet/Capsule: Swallow tablet or capsule form of Orofer Syrup 150 ml as a whole with a glass of water. You can take Orofer Syrup 150 ml with or without food at regular intervals, as prescribed by the doctor. Do not crush, chew or break it. Your doctor will decide the dosage based on the severity of your medical condition.Chewable tablet: ","ALCOHOLIt is advised to avoid the alcohol intake while using Orofer Syrup 150 ml since alcohol can hinder the absorption of iron in Orofer Syrup 150 ml.PREGNANCYOrofer Syrup 150 ml is safe to use if prescribed by a doctor during pregnancy. Orofer Syrup 150 ml is generally given at least four weeks before pregnancy and is continued up to 3 months of pregnancy.","Side Effects of Orofer Syrup 150 mlConstipationDiarrhoeaStomach crampsDark stoolsLoss of appetiteUpset stomach ","yes","Not_Available");
INSERT INTO register_drug VALUES("45","images/med5.png","Orofer S Injection 2.5ml","Emcure Pharmaceuticals Ltd(india)","20","2014-05-18","2017-05-18","80.07","Injection(liquid)","2022-05-30","00:24:37.0000","Orofer FCM Injection 10 ml belongs to the group of anti-anaemic medicines used to treat iron deficiency anaemia in patients who are intolerant to oral iron preparations, have non-dialysis dependant chronic kidney disease","OROFER S 200MG INJECTION is used to treat iron-deficiency anaemia in patients with chronic kidney diseases. It contains Iron sucrose.","Intravenous injection: OROFER S 200MG INJECTION is injected slowly for over 2 to 5 minutes into the vein by a healthcare professional.Infusion: OROFER S 200MG INJECTION solution may also be mixed with saline solution and is given as an infusion or a drip.","ALCOHOL\nCONSULT YOUR DOCTOR\nIt is advised to avoid the alcohol intake while using OROFER S 200MG INJECTION since alcohol can hinder the absorption of iron in OROFER S 200MG INJECTION.\nBREAST FEEDING\nOROFER S 200MG INJECTION can pass into the breast milk when used by a breastfeeding mother. Please consult your doctor before taking OROFER S 200MG INJECTION if you are a nursing mother.","Muscle cramps\nNausea\nVomiting\nTaste changes\nDiarrhoea\nConstipation","yes","Not_Available");
INSERT INTO register_drug VALUES("42","images/med2.png","Allegra 120mg Tablet(10s)"," Sanofi India Limited","10","2014-05-25","2017-05-12","105.59","solid","2022-05-29","11:03:47.0000","ALLEGRA 120MG contains Fexofenadine which belongs to the class of medications called second generation antihistamines, especially the class known as histamine receptor antagonists.","Allegra 120 mg Tablet 10\'s is known as a non-drowsy antihistamine. It\'s less likely to make you feel sleepy than some other antihistamines.","Take Allegra 120 mg Tablet 10\'s with or without food, once a day preferably in the evening or night as it may cause slight drowsiness. Take it twice a day only if your doctor has prescribed it to you.","DRIVING\nDrive only if you are physically stable and mentally focussed, If you experience drowsiness after taking Allegra 120 mg Tablet 10\'s you should not drive or operate any machinery or vehicles.\nLIVER\nAllegra 120 mg Tablet 10\'s to be taken with caution, especially if you have a history of Liver diseases/conditions. The dose may have to be adjusted by your doctor.","Like other medications, Allegra 120 mg Tablet 10s also has certain side effects, but it is not mandatory for anyone to experience them. In certain cases, you may experience headache, dizziness, feeling sick (nausea), and diarrhoea.","yes","Not_Available");
INSERT INTO register_drug VALUES("47","images/med7.png","Premence Plus Capsule (15s)"," Meyer Organics Ltd(india)","6","2014-05-04","2024-05-03","114.92","Capsule(solid)","2022-07-06","23:09:48.0000","Description. Premence Plus capsule is a nutritional supplement that nourishes the body with essential vitamins and minerals that help in regulating menstrual rhythm. It used to ease the symptoms of pre-menstrual syndrome (PMS) and in addressing the emotional and physical symptoms of PMS.","It increases the production of collagen, a protein needed for growth and development of hair, skin and nails.It boosts energy levels.Thiamine (vitamin B1) helps to produce certain neurotransmitters and carryout several enzyme processes.","Take the dosage as prescribed by a doctor. Swallow the capsule with a glass of water.","If you are taking any other medicines or diet supplements, it is advised to inform your doctor to prevent drug interaction.Do not take more than the prescribed dose.","It is generally safe and does not cause any side effects if used as prescribed. However, if you experience any side effects, please consult a doctor.","yes","Available");
INSERT INTO register_drug VALUES("48","images/med8.png","DrNATcURE 500 ml","CRESCENZIA TRADETECH PVT LTD(india).","8","2014-05-11","2018-05-19","297.99","liquid","2022-05-30","01:20:07.0000","The DrNATcURE Apple Cider Vinegar consists of 100% naturally fermented raw apple cider vinegar with ginger, garlic, lemon and honey. The combination of these ingredients helps in maintaining cholesterol levels, along with reducing the risk of several other heart diseases.","The combined goodness of ingredients helps in managing weight loss and renal care.\nIt also aids in losing weight, improving digestion, and managing blood sugar levels.\nIt\'s anti-bacterial, anti-oxidant.\nHelpful in the reduction of cholesterol levels.","Usage Direction: Mix 10 ml of the blended drink with 100-150 ml of water and take 10-15 minutes before food twice or thrice a day. "," Store in a cool and dry place. Avoid contact from sunlight."," Delayed stomach emptying \n Digestive side effects Low potassium levels and bone loss \n Erosion of tooth enamel.","no","Not_Available");
INSERT INTO register_drug VALUES("49","images/med9.png","Old Harbor Tea Bags - Mint Green Tea (25s)","KKV Tea & Coffee Pvt Ltd(india)","9","2014-05-19","2025-05-19","132.7","solid","2022-07-14","21:57:41.0000","Old Harbor Mint Green Tea is an earthy blend that, when combined with mint leaves and natural mint flavour, transforms into a refreshing, cooling combination, a perfect lift for one, at any time of day. Revitalizing and aromatic. Full of antioxidants and catechins. Staple-free tea bags and microwavable.","Helps in the cleansing of the body. Tulsi helps to boost immunity naturally.","A soft yet intoxicating fragrance of jasmine balanced with the grassy notes of green tea, making it a flavored choice amongst connoisseurs. \nHeat water to 90-95� Celsius or 194-205� Fahrenheit."," use cutting-edge technology,all natural,without components that negatively affect flavour or brewing method.","Consuming any beverage with caffeine may produce side effects in some people. These may include increased heartbeat (tachycardia), palpitations, restlessness, nervousness, problems with sleep, or a headache. ","no","Available");
INSERT INTO register_drug VALUES("50","images/med10.png","Ensure High Protein Nutrition Powd 400 gmer"," Abbott Healthcare Pvt Ltd(india)","6","2014-05-26","2017-05-03","434.6","Powder(solid)","2022-05-30","01:31:12.0000","Ensure High Protein Powder is a complete and balanced nutrition supplement designed for adults. Each glass of Ensure provides high-quality protein and 31 other essential nutrients required for a healthy and balanced diet. It helps increase muscle mass, provides energy, boosts immunity and supports digestive health.","High protein nutrition for active adults.","Add 2 tablespoons (approximately 25g of powder) to 150ml of milk.\nAdd 4 tablespoons (approximately 50g of powder) to 190ml of water.","Keep out of reach of children.","Irritability, Garlic breath odor, fatigue, nail brittleness.","no","Not_Available");
INSERT INTO register_drug VALUES("51","images/med11.png","Azista Spice Sip Refreshing Spice Tea "," AZISTA INDUSTRIES PVT.LTD.(india)","5","2014-05-17","2017-05-10","298.58","solid","2022-05-30","01:39:36.0000","Spice Sip - Natural Immunity Booster Wellness Tea for All Adults Kids - Turmeric Cinnamon Black Pepper Spices - Pack of 6 (36 Tea Bags)","helps boosts your Immunity levels, keeps away from flu & fights viral infections & seasonal changes. May helps you relieve from nasal congestion\nFights viral, bacterial and fungal infections","Pour 100 ml. boiling water with spice sip tea bag in a cup and infuse for 4-5 minutes or till your last sip.","Read the label carefully before use\nKeep out of reach of the children\nStore in a cool dry place","Has strong antioxidants and a powerful anti-inflammatory effect","no","Not_Available");
INSERT INTO register_drug VALUES("52","images/med13.png","Dettol Antiseptic Liquid, 60 ml","RECKIT BENCKISER INDIA PVT LTD","42","2014-05-17","2024-04-25","218.96","liquid","2022-07-08","11:01:16.0000","Dettol Antiseptic Liquid protects you and your family from 100 illness causing germs","Helps to prevent the growth of bacteria, fungus and virusesProtects against germs and heals cuts and scratchesUseful for personal hygiene by adding a small concentration to waterUsed as a household disinfectant","Add 1-2 capful of Dettol to water for household cleaning activities.Use a few drops of Dettol to disinfect minor wounds and scrapes.Add 1 capful of Dettol to water while bathing.","When used as an antiseptic disinfectant liquid, it does not cause any side effects. When used for cuts and wounds or as an after-shave lotion, it may cause mild irritation and sting on the skin but no major side effects. However, if ingested","Read the label carefully before use.Keep out of the reach of the childrenStore in a cool dry place away from direct sunlight.Use under medical supervision.","no","Available");
INSERT INTO register_drug VALUES("103","images/med14.png","Regrowee 5% Gel","West-Coast Pharmaceutical Works Ltd","100","2014-06-17","2024-06-24","328.68","liquid","2022-07-12","21:49:10.0000","Regrowee 5% Gel is generally safe and suitable for most people but may have potential side effects. The most common side effects of this medicine are itching and skin irritation of the treated area of the scalp. In case of accidental application in other areas, it may result in unwanted hair growth. Rinse thoroughly with plenty of water if you get it in your eyes, mouth, or broken skin. Talk to your doctor if you are bothered by the side effects or if they do not go away.","In Treatment of Hair lossRegrowee 5% Gel is a medicine used to treat common hereditary hair loss. It can prevent further hair loss and help hair to re-grow. It works by increasing blood flow to the hair follicles on your scalp, which prevents hair cell death and also enhances new hair growth. It is most effective for baldness or thinning at the top of the scalp but less effective at the front or for receding hairline.","This medicine is for external use only. Use it in the dose and duration as advised by your doctor. Check the label for directions before use. Clean and dry the affected area and apply the gel. Wash your hands after applying, unless hands are the affected area.","Breast feedingSAFE IF PRESCRIBEDRegrowee 5% Gel is safe to use during breastfeeding. Human studies suggest that the drug does not pass into the breastmilk in a significant amount and is not harmful to the baby.Store below 30°C","Skin irritationItching","yes","Available");
INSERT INTO register_drug VALUES("202","images/admin_icon.png","hhhhh 120mg Tablet(10s)"," Sanofi India Limited","85","2022-07-05","2025-02-20","105","solid","2022-07-14","21:51:12.0000","hhhghhghgh","hhhhhh","hhhhghghh","hghhhhh","hhhhhhhh","yes","Available");
INSERT INTO register_drug VALUES("200","","bvvb","Swanson Health Products","1","2021-12-01","2023-03-08","5.15","solid","2022-04-23","22:03:18.0000","vvv","ccc","vvv","vcvc","vvcc","yes","Available");
INSERT INTO register_drug VALUES("201","images/","hhhv","sws","10","2022-07-11","2021-11-10","10","solid","2022-07-06","22:59:45.0000","df","ff","ffdd","dfdd","dfdf","yes","Not_Available");


DROP TABLE IF EXISTS store_cordi_table;

CREATE TABLE `store_cordi_table` (
  `St_cordinator_id` varchar(15) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Middle_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Age` int(4) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(5) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`St_cordinator_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO store_cordi_table VALUES("STRCOR-102101-0","ama","jhhg","new","jhgjhnew12@gmail.com","store","c3RvcmU=","14235222","Female","33","2022-07-13","00:51:56.00000","1");
INSERT INTO store_cordi_table VALUES("STRCOR-102828-0","ama","nouh","new","jhgjhgew12@gmail.com","dawit","ZGF3aXQ=","24552","male","25","2022-07-13","00:50:09.00000","1");


DROP TABLE IF EXISTS tmp_order_customer;

CREATE TABLE `tmp_order_customer` (
  `presc_Image` text NOT NULL,
  `Drug_name` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Company_name` text NOT NULL,
  `Price` float NOT NULL,
  `Type` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  `Number` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` varchar(50) NOT NULL,
  `med_id` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`Number`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO tmp_order_customer VALUES("prescription_order/download.png","Ferium XT Drops 15ml","1"," Emcure Pharmaceuticals Ltd(india)","60.19","Drops(liquid)","111","50","CUS-55791-0","46","pending");
INSERT INTO tmp_order_customer VALUES("prescription_order/download.png","Amicline Tablet (10s)","3"," Franco Indian Pharmaceuticals Pvt Ltd","18.72","solid","take one per day","49","CUS-55791-0","37","Finished");
INSERT INTO tmp_order_customer VALUES("prescription_order/presc7.png","Amicline Tablet (10s)","3"," Franco Indian Pharmaceuticals Pvt Ltd","18.72","solid","this is amoxa","47","CUS-37846-0","37","Finished");
INSERT INTO tmp_order_customer VALUES("prescription_order/Valid PBS Public Hospital Prescription with a non-PBS medicine prescribed.jpg","Ferium XT Drops 15ml","4"," Emcure Pharmaceuticals Ltd(india)","240.76","Drops(liquid)","take one","46","CUS-98318-0","46","pending");


DROP TABLE IF EXISTS user_table;

CREATE TABLE `user_table` (
  `ID` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO user_table VALUES("CUS-55791-0","ttttnew12@gmail.com","abebe","YWJlYmU=","0987654321","1");
INSERT INTO user_table VALUES("ADMIN-304657-0","kjhjhjew12@gmail.com","admin247","MTI1NTU1","0993799437","1");
INSERT INTO user_table VALUES("MANEGE-101237-0","dfddffw12@gmail.com","manager3","bWFuYWdlcjM=","122145545","1");
INSERT INTO user_table VALUES("STRCOR-102828-0","jhgjhgew12@gmail.com","dawit","ZGF3aXQ=","24552","1");
INSERT INTO user_table VALUES("STRCOR-102101-0","jhgjhnew12@gmail.com","store","c3RvcmU=","14235222","1");
INSERT INTO user_table VALUES("CASH-328398-0","ererew12@gmail.com","cashier","Y2FzaGllcg==","122121212","1");
INSERT INTO user_table VALUES("CASH-382000-0","dfdfnew12@gmail.com","cashier2","Y2FzaGllcjI=","12233332","1");
INSERT INTO user_table VALUES("MANEGE-101449-0","ddfdinew12@gmail.com","manager2","bWFuYWdlcjI=","33232223","1");
INSERT INTO user_table VALUES("MANEGE-101799-0","bininew12@gmail.com","manager","bWFuYWdlcg==","233332233","1");
INSERT INTO user_table VALUES("ADMIN-320341-0","jhgjhbnew12@gmail.com","admin","YWRtaW4=","233233","1");
INSERT INTO user_table VALUES("CUS-37846-0","mebarekw12@gmail.com","meberak","bWViZXJhaw==","124444","1");
INSERT INTO user_table VALUES("ADMIN-346483-0","hgbjew12@gmail.com","admin2","YWRtaW4y","32565625","1");


DROP TABLE IF EXISTS view_report;

CREATE TABLE `view_report` (
  `Branch_code` varchar(50) NOT NULL,
  `transaction_date` date NOT NULL,
  `transaction_time` time NOT NULL,
  `transaction_ref_no` varchar(50) NOT NULL,
  `Reciver_name` varchar(50) NOT NULL,
  `Account_number` varchar(50) NOT NULL,
  `Account_holder` varchar(50) NOT NULL,
  `Deposited_amount` float NOT NULL,
  `Deposited_by` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_ref_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO view_report VALUES("102","2022-06-29","20:12:52","12014578954","Geme","10002145687","newson","145","Abebe Alemu");
INSERT INTO view_report VALUES("124","2022-06-16","20:43:00","1002145787","Abay","100024515","kebede Alemu","15201","Abay");
INSERT INTO view_report VALUES("128","2022-06-22","20:54:00","10021457457","Abay","10002555","kebede Alemu","1520180","Abay");
INSERT INTO view_report VALUES("124","2022-06-02","21:14:00","10021457456","Abay","10002555","kebede Alemu","15201","Abay");
INSERT INTO view_report VALUES("124","2022-06-21","12:29:00","545455445","Abay","10002555","kebede Alemu","1520140","Abay");
INSERT INTO view_report VALUES("124","2022-06-09","21:35:00","5566566556","Abay","10002555","kebede Alemu","1520140","Abay");
INSERT INTO view_report VALUES("124","2022-06-29","21:38:00","555454454545","Abay","10002555","kebede Alemu","15201800","Abay");
INSERT INTO view_report VALUES("124","2022-06-07","12:07:00","78555545","Abay","10002555","kebede Alemu","1520140","Abay");
INSERT INTO view_report VALUES("128","2022-06-03","22:30:00","5545544","Abay","10002555","kebede Alemu","1520140","Abay");
INSERT INTO view_report VALUES("124","2022-06-15","08:55:00","147568888","Alemu Abebe","10002555","omega pharmacy","200","Getnet Abebe");
INSERT INTO view_report VALUES("124","2022-06-28","14:32:00","10558856","Abay","10002555","kebede Alemu","1520140","Getnet Abebe");
INSERT INTO view_report VALUES("124","2022-07-13","21:31:00","10021556667","Alemu Abebe","10002555","kebede Alemu","15201800","Getnet Abebe");
INSERT INTO view_report VALUES("124","2022-07-13","21:33:00","10027786565","Alemu Abebe","10002555","kebede Alemu","1520140","Getnet Abebe");
INSERT INTO view_report VALUES("124","2022-07-01","23:52:00","1002456857","Alemu Abebe","10002555","kebede Alemu","1520140","Getnet Abebe");
INSERT INTO view_report VALUES("128","2022-07-07","21:59:00","556647855","Alemu Abebe","10002555","kebede Alemu","1520180","Getnet Abebe");
INSERT INTO view_report VALUES("124","2022-07-20","21:33:00","122445878755","Abay","10002555","kebede Alemu","200","Getnet Abebe");


