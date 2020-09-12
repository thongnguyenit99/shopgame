-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 07:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_url`
--

CREATE TABLE `page_url` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_url`
--

INSERT INTO `page_url` (`id`, `url`) VALUES
(1, 'overwatch'),
(2, 'battleborn'),
(3, 'diablo-3'),
(4, 'the-sim-4'),
(5, 'simcity'),
(6, 'minecraft');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_url` int(11) DEFAULT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `price` double NOT NULL,
  `promotion_price` double NOT NULL DEFAULT '0',
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Manufacturer` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-chưa xóa;1-đã xóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_url`, `name`, `detail`, `price`, `promotion_price`, `image`, `Manufacturer`, `deleted`) VALUES
(1, 1, 'OVER WATCH', '<p>Overwatch: Game of the Year Edition bao gồm các vật phẩm thưởng:</p>\r\n\r\n<p>10 Hộp quà tặng với các vật phẩm ngẫu nhiên như tín dụng, giao diện, biểu tượng cảm xúc, lời thoại đặt ra, bình xịt và phần giới thiệu nổi bật.</p>\r\n<p>Đôi cánh của Mercy dành cho người chơi Diablo 3</p>\r\n<p>Tracer cho Heroes of the Storm</p>\r\n<p>Hero Skins: Giao diện cổ điển cho Blackwatch Reyes, Strike-Commander Morrison, Overgrown Bastion, Security Chief Phara và Slipstream Tracer.</p>\r\n<p>StarCraft 2 trong game Portraits of Bastion, Tracer, Pharah, Reaper, Soldier: 76 và Winston.\r\nTrở lại thẻ Hearthstone theo chủ đề Overwatch\r\nVật nuôi bé Winston để sử dụng trong World of Warcraft</p>\r\n<p>Thẻ chủ đề Overwatch trở lại cho Hearthstone</p>', 1300000, 1270000, 'overwatch.jpg', 'Blizzard', 0),
(2, 3, 'DIABLO 3', '<p><strong><span style=\"color:#FF0000\">Chú ý : Cần có bản DIABLO 3 Reaper of Souls​ để kích hoặt DLC&nbsp;</span></strong>&nbsp;<strong><span style=\"color:#FF0000\">Rise of the Necromancer</span></strong></p>\r\n<p>Reaper of souls sẽ bổ sung Act (chương) 5 cho cốt truyện chính của Diablo 3. Cùng với nó là các loại quái thường, quái Elite cũng như các bản đồ, môi trường mới. Ngay cả các thị trấn cũng sẽ mới toanh. Điều này chắc chắn sẽ đem lại sự phấn khích cho các fan của game. Các loại quái Elite giờ đây sẽ cực kỳ to lớn, giúp người chơi không thể nhầm lẫn chúng với các loại quái thường. Quái Elite cũng “dữ dằn” hơn, khi chơi ở cấp độ Master, Willis từng “gục ngã” trước một số quái dạng này. Ngoài ra, chế độ chơi Adventure mới sẽ cung cấp cho game thủ các loại nhiệm vụ ngẫu nhiên rất thú vị.</p><p>2. Vật phẩm mới, hình ảnh đẹp hơn</p><p>Blizzard đã tập trung đầu tư hơn vào việc thiết kế hình ảnh các vật phẩm, khiến chúng trông đẹp mắt hơn. Đây có lẽ chỉ là thay đổi nhỏ, nhưng vẫn góp phần tạo nên những trải nghiệm tươi mới cho game.</p><p>3. Các loại Gem tốt hơn</p><p><br>\r\nWillis đã rất ngạc nhiên và thích thú khi nhặt được nhưng viên Gem (ngọc khảm trang bị) rất có giá trị, chẳng hạn như viên Marquise Emerald, có tác dụng tăng 110% Chí mạng khi khảm vào vũ khí. Trong phiên bản chính, muốn có những loại ngọc thế này, người chơi phải tốn rất nhiều Vàng. Dĩ nhiên bản mở rộng sẽ giới thiệu nhiều loại ngọc mới, chẳng hạn như những loại cho phép “Kháng tất cả”.</p>', 390000, 0, 'diablo-3.jpg', 'Blizzard', 0),
(3, 6, 'MINECRAFT', '<p>Minecraft là một trò chơi điện tử độc lập trong một Thế giới mở. Ban đầu nó được tạo ra bởi lập trình viên người Thụy Điển Markus \"Notch\" Persson và sau đó được phát triển và phát hành bởi một công ty ở Thụy Điển là Mojang. Khả năng sáng tạo và xây dựng Minecraft cho phép người chơi xây dựng công trình bằng cách xây các khối kết cấu trong một thế giới 3D được tạo ra một cách thủ tục. Các hoạt động khác trong game bao gồm tìm kiếm, thu thập tài nguyên, chế tạo, chiến đấu. Có nhiều chế độ chơi có sẵn, gồm chế độ sinh tồn, khi mà người chơi phải tìm tài nguyên để xây dựng thế giới và duy trì sức khỏe, chế độ sáng tạo, nơi người chơi tài nguyên không giới hạn để xây dựng và có khả năng bay, và chế độ phiêu lưu, nơi người chơi chơi các bản đồ được người khác tạo ra. Phiên bản PC của trò chơi còn nổi tiếng với các mod, cho phép có thêm nhiều công cụ mới, nhân vật và nhiệm vụ cho trò chơi.</p><p>Minecraft nhận được năm giải thưởng Game Developers Conference trong năm 2011. Nhà phát triển game là Mojang nhận được giải thưởng Game Developers Choice Awards, trong hạng mục sáng tạo, giải thưởng Best Downloadable Game, và hơn hết là giải thưởng Debut game; từ Independent Games Festival, game đã giành được giải thưởng Khán giả và các giải thưởng Seumas McNally. Trong năm 2012, Minecraft đã được trao giải Golden Joystick ở hạng mục Best Downloadable Game. Tính đến tháng 6 năm 2015, hơn 70 triệu bản đã được bán ra, trong đó có 20 triệu đôla giữa Xbox 360 và Xbox One và 20 triệu trên PC,[15] làm cho nó là game PC bán chạy nhất cho đến nay và trò chơi điện tử bán chạy nhất mọi thời đại. Ngày 15 Tháng 9 năm 2014, Microsoft đã công bố một thỏa thuận mua Mojang và quyền sở hữu của Minecraft, quyền sở hữu trí tuệ với giá 2,5 tỷ đô la Mỹ; việc mua lại đã được hoàn tất vào ngày 06 tháng 11, 2014.</p>', 650000, 0, 'minecraft.jpg', 'MOJANG', 0),
(4, 2, 'BATTLEBORN', '<p>RA MẮT VÀO VŨ TRỤ BIÊN GIỚI VÀ BẬT MÍ \"N\" LOOT THEO CÁCH CỦA BẠN THÔNG QUA MỘT KHUYẾN MÃI MỚI VỀ THƯƠNG HIỆU MÀ ROCKET SẼ CHO BẠN ĐẾN PANDORA’S MOON Ở BIÊN GIỚI: THE TRƯỚC!\r\n</p><p>Khám phá câu chuyện đằng sau nhân vật phản diện Borderlands 2, Jack Đẹp trai, và sự nổi lên của anh ta. Diễn ra giữa Borderlands đầu tiên và Borderlands 2, Tiền truyện mang đến cho bạn một lối chơi hoàn toàn mới với thể loại pha trộn giữa cơ chế bắn súng và RPG mà người chơi yêu thích.\r\n</p><p>Bay lơ lửng trên không với mỗi cú nhảy trọng lực thấp trong khi hạ gục kẻ thù từ trên cao bằng cách sử dụng băng và vũ khí laser mới. Bắt một chuyến đi và khám phá cảnh quan Mặt Trăng với các phương tiện mới cho phép tăng thêm mức độ của tình trạng hỗn loạn hủy diệt.\r\n</p><p>ĐƯA MAYHEM ĐẾN MẶT TRĂNG</p><p>Cảm nhận trọng lực thấp của mặt trăng với mỗi bước nhảy và dậm chân.\r\nGây ra tình trạng hỗn loạn với vũ khí mới được trang bị khả năng băng và laser!\r\nKẻ thù mới cung cấp một bước ngoặt dựa trên không gian!</p>', 750000, 700000, 'Battleborn.jpg', '2K Games', 0),
(5, 4, 'THE SIM 4', '<p>The Sims là một trò chơi giả lập cuộc sống con người (simulation) được tạo ra bởi nhà thiết kế trò chơi máy tính Will Wright. Trò chơi được sản xuất bởi công ty Maxis và phân phối bởi Electronic Arts. Trò chơi giả lập các hoạt động và đời sống thường ngày của một hay nhiều người ảo (thường gọi tắt là Sims) ở vùng ngoại thành gần SimCity. Trò chơi được phát hành lần đầu vào ngày 2 tháng 4 năm 2000.</p><p>Khác với nhiều trò chơi khác mang tính chất thắng thua rõ rệt, The Sims không mang tính chất thắng thua như các trò chơi khác. The Sims chủ yếu tập trung vào cuộc sống của những con người ảo gọi là Sims, đặt họ vào một thế giới ảo với các hoạt động sinh hoạt thường ngày giống thật như ăn, ngủ, nấu nướng, làm việc, đi học, đi vệ sinh... Người chơi có thể tùy biến các nhân vật (đầu tóc, quần áo, khuôn mặt...) cũng như xây dựng các ngôi nhà dành riêng cho nhân vật của mình.</p><p>Sims trong [B]The Sims 4[/URL] sẽ “thông minh hơn, cá tính hơn” và là “những người sẽ kết nối và tương tác hàng ngày với nhau” theo như đoạn trailer mới nhất của hãng EA đã công bố. Mỗi nhân vật sẽ có một câu chuyện riêng, những câu chuyện này sẽ “sẵn sàng thổ lộ”. Đây sẽ là một điểm cộng lớn của The Sims 4, khi người chơi sẽ bị cuốn vào nhiều câu chuyện khác nhau, nhiều mối quan hệ và cuộc hội thoại khác nhau…mà không thể dứt ra được.</p>', 850000, 800000, 'thesim4.jpg', 'Electronic Arts', 0),
(6, 5, 'SIMCITY COMPLETED EDITION', '<p><span style=\"color:#FF0000\"><strong>Simcity completed edition bao gồm:<br>\r\n- simcity stardard Edition<br>\r\n- the SimCity: Cities of Tomorrow expansion pack<br>\r\n- the Amusement Park<br>\r\n- Airship, French, British and German City sets.​</strong></span></p><p>Dòng game xây dựng – mô phỏng SimCity của Maxis vừa được EA khởi động lại bằng phiên bản mới nhất với cái tên đơn giản SimCity, và trò chơi sẽ được phát hành vào ngày 7/3 tới. Trong đoạn phim intro của game vừa được EA tung ra, game thủ có thể nhìn thấy những khung cảnh đáng kinh ngạc mà trò chơi sẽ mang lại.</p><p>Nếu đã từng chơi qua các bản SimCity trước đây, game thủ sẽ nhận thấy sự quen thuộc bởi phiên bản mới này sẽ mang lại gần như tất cả những gì mà bạn đã từng cảm nhận. Người chơi có thể tìm thấy tất cả những thông tin cần thiết cho việc quản lý tài chính, phát triển kinh tế và mở rộng thành phố chỉ bằng vài cú click chuột, cũng như những trợ lý AI hết sức hữu dụng giúp game thủ vạch kế hoạch phát triển và giải quyết các vấn đề như rác thải, sức khỏe hay an ninh của người dân.</p><p>Bên cạnh việc phát triển đồng đèu theo mọi hướng, bạn còn có thể lựa chọn việc chuyên môn hóa thành phố của mình, và từ đó phát triển thiên hẳn về một phía. Theo thời gian, vùng đất hoang vu ban đầu của bạn có thể biến thành một Las Vegas ảo với những sòng bạc chọc trời, hay một trung tâm khoa học đủ khả năng để phóng tên lửa lên vũ trụ. “Có vô hạn khả năng” là điều mà Maxis muốn mang đến cho game thủ trong tựa game mới nhất của mình.</p>', 650000, 0, 'simcity.jpg', 'Electronic Arts', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_url`
--
ALTER TABLE `page_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idurl_id` (`id_url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page_url`
--
ALTER TABLE `page_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_idurl_id` FOREIGN KEY (`id_url`) REFERENCES `page_url` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
