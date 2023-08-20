--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `first_name1` varchar(100) NOT NULL,
  
  `gender1` varchar(30) NOT NULL,
  `email1` varchar(200) NOT NULL,  
  `address1` text NOT NULL,
  `mobile_no1` int(15) NOT NULL,
    
    `first_name2` varchar(100) NOT NULL,
  
  `gender2` varchar(30) NOT NULL,
  `email2` varchar(200) NOT NULL,  
  `address2` text NOT NULL,
  `mobile_no2` int(15) NOT NULL,
    
    `first_name3` varchar(100) NOT NULL,
  
  `gender3` varchar(30) NOT NULL,
  `email3` varchar(200) NOT NULL,  
  `address3` text NOT NULL,
  `mobile_no3` int(15) NOT NULL,
    
    `first_name4` varchar(100) NOT NULL,
  
  `gender4` varchar(30) NOT NULL,
  `email4` varchar(200) NOT NULL,  
  `address4` text NOT NULL,
  `mobile_no4` int(15) NOT NULL,
    
    `pickup_address` text NOT NULL,
    `drop_address` text NOT NULL
    
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;