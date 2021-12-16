CREATE TABLE `senderinfo` (
 sender_id int(11) AUTO_INCREMENT PRIMARY KEY,
 sender_name varchar(100) NOT NULL,
 sender_email varchar(100) NOT NULL,
 sender_number varchar(50) NOT NULL,
 sender_country varchar(255) NOT NULL,
 sender_city varchar(255) NOT NULL,
 items varchar(200) NOT NULL DEFAULT 0,
 quantity varchar(50) NOT NULL DEFAULT 0,
 price varchar(50) NOT NULL,
 kg varchar(20) NOT NULL,
 b_id varchar(200) NOT NULL,
 tracking_id varchar(10) NOT NULL,
 em_name =varchar(200) NOT NULL,
 date_update timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 date_registered timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `shippinginfo` (
reciever_id int(11) AUTO_INCREMENT PRIMARY KEY,
reciever_name varchar(255) NOT NULL,
 reciever_number varchar(255) NOT NULL,
 reciever_email varchar(255) NOT NULL,
 reciever_country varchar(255) NOT NULL,
 reciever_city varchar(255) NOT NULL,
 sending_by varchar(255) NOT NULL,
  status varchar(255) NOT NULL DEFAULT 'New',
    items varchar(100) NOT NULL,
    quantity varchar(100) NOT NULL,
     kg varchar(100) NOT NULL,
      b_id varchar(200) NOT NULL,
     current_location varchar(100) NOT NULL,
   tracking_id varchar(10) NOT NULL,
   message longtext NOT NULL DEFAULT 'You are secured',
   reciever_dateupdate timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 recieverdate_registered timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `branches` (
 b_id Int(11) AUTO_INCREMENT PRIMARY KEY,
 b_name varchar(100) NOT NULL,
 b_country varchar(100) NOT NULL,
 b_city varchar(50) NOT NULL,
 b_operation varchar(20) NOT NULL DEFAULT "Not active",
 date_update timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 date_registered timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `adminsregister` (
 a_id Int(11) AUTO_INCREMENT PRIMARY KEY,
 a_name varchar(100) NOT NULL,
 email varchar(100) NOT NULL,
 a_number varchar(100) NOT NULL,
 a_country varchar(100) NOT NULL,
 a_city varchar(50) NOT NULL,
 a_operation varchar(20) NOT NULL DEFAULT "Not active",
 a_role varchar(50) NOT NULL,
 b_id varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
  message longtext NOT NULL DEFAULT 'You are secured',
 date_update timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 date_registered timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `employees` (
 em_id Int(11) AUTO_INCREMENT PRIMARY KEY,
em_name varchar(100) NOT NULL,
em_email varchar(100) NOT NULL,
adminemail varchar(100)NULL,
em_number varchar(50) NOT NULL,
em_role varchar(50) NOT NULL,
b_id varchar(100) NOT NULL,
password varchar(200) NOT NULL,
date_update timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
date_registered timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



