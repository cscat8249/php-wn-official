-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 21-03-03 07:52
-- 서버 버전: 5.7.18
-- PHP 버전: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `snw`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `snw_theme`
--

CREATE TABLE `snw_theme` (
  `id` int(11) NOT NULL,
  `theme_code` varchar(50) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `theme_type` varchar(50) NOT NULL,
  `theme_type2` varchar(50) NOT NULL,
  `theme_layout` varchar(50) NOT NULL,
  `theme_color_type` varchar(50) NOT NULL,
  `theme_type_position` varchar(50) NOT NULL,
  `theme_main_color` varchar(255) NOT NULL,
  `theme_sub_color` varchar(50) NOT NULL,
  `theme_content` text NOT NULL,
  `theme_url` varchar(255) NOT NULL,
  `theme_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `snw_theme`
--

INSERT INTO `snw_theme` (`id`, `theme_code`, `theme_name`, `theme_type`, `theme_type2`, `theme_layout`, `theme_color_type`, `theme_type_position`, `theme_main_color`, `theme_sub_color`, `theme_content`, `theme_url`, `theme_order`) VALUES
(1, 'snw.onepage.theme1', '베리 원페이지 테마1', 'local', '', '', '', '', '#f1c40f', '', 'images/logo/logo_icon.png|+031 000 1111|master@domain.com|https://www.facebook.com/NASA/|https://www.instagram.com/nasa/|https://twitter.com/nasa|https://www.youtube.com/channel/UCLA_DiR1FfKNvjuUpBHmylQ|on', '', 0),
(72, 'snw.onepage.theme1', '', 'index', '', '', '', 'about', '', '', '테마는 역시 <b>베리 테마</b>!|베리 원페이지 테마는 <b>완벽한 반응형 웹</b>입니다. 각 <b>섹션별 설정</b>을 버튼 하나로 쉽게 변경가능합니다. 슬라이더 설정, 테마 메인 컬러등 <b>사이트 설정</b>을 통해 쉽게 변경 가능합니다. 관리자 부터 클라이언트까지 <b>손쉬운 설정</b>으로 커뮤니케이션이 수월합니다. 합리적인이고 파격적인 가격에 이 <b>테마</b>를 구입해보세요!|images/bg/biz1.jpg|images/man-img.png|링크|#', '', 0),
(73, 'snw.onepage.theme1', '', 'index', '', '', '', 'toped', '', '', 'fa-building|CREATIVE DESIGN|베리 원 페이지 테마는 설치와 설정이 쉽습니다!<br>우측 스위치를 통해 손쉽게 설정이 가능합니다.|자세히 보기|#|fa-angellist|Marketing|생산자로부터 소비자 또는 사용자에게로 제품 및 서비스가 흐르도록<br> 관리하는 제반 기업 활동의 수행이다|링크|#|fa-cube|management|연예매니지먼트 산업은 최근에 들어와 하나의 독립된<br>산업으로서 주목받기시작하고있다. 대중문화의 산업화|Learn More|#', '', 0),
(74, 'snw.onepage.theme1', '', 'index', '', '', '', 'vboard1', '', '', 'portfolio', '', 0),
(75, 'snw.onepage.theme1', '', 'mslider', 'a', '', '', 'index', '', '', 'https://www.youtube.com/watch?v=Jqf9haCd6mM||요즘엔 원페이지가 대세?| 유튜브 배경도 <span class="color">OK!</span>|구매하기|#', '', 0),
(76, 'snw.onepage.theme1', '', 'mslider', 'b', '', '', 'index', '', '', '|images/bg/bg-2.jpg|모든 설정을 한번에! 정말 편해요!|<span class="color">저렴한 가격</span> 베리테마 하나로 끝!|자세히보기|#', '', 0),
(77, 'snw.onepage.theme1', '', 'mslider', 'b', '', '', 'index', '', '', '|images/bg/biz4.jpg|이 가격에 이런 테마?|손쉬운 설정으로 <span class="color">관리자와 고객모두 만족!</span>||', '', 0),
(78, 'snw.onepage.theme1', '', 'index', '', '', '', 'online', '', '', '온라인 상담예약|저희 제품을 사용하시면서 궁금하셨던 내용이 있으시면, 무엇이든 문의해 주십시오. 당사와 관련된 여러분의 제안, 불편 사항 등 다양한 고객 의견을 보내주시면 더 좋은 제품과 서비스에 반영 하겠습니다.|24시 문의가능 / 1515-0000|contact|예약접수|images/bg/biz11.jpg', '', 0),
(79, 'snw.onepage.theme1', '', 'partner', '', '', '', 'index', '', '', 'images/partner/amazon.png|아마존|https://www.amazon.com/', '', 0),
(80, 'snw.onepage.theme1', '', 'partner', '', '', '', 'index', '', '', 'images/partner/apple.png|애플|http://apple.co.kr', '', 0),
(81, 'snw.onepage.theme1', '', 'partner', '', '', '', 'index', '', '', 'images/partner/fedex.png|페덱스|https://www.fedex.com/ko-kr/home.html', '', 0),
(82, 'snw.onepage.theme1', '', 'partner', '', '', '', 'index', '', '', 'images/partner/samsung.png|삼성|https://www.samsung.com/', '', 0),
(83, 'snw.onepage.theme1', '', 'partner', '', '', '', 'index', '', '', 'images/partner/snw.png|snw|http://snw.kr', '', 0),
(84, 'snw.onepage.theme1', '', 'partner', '', '', '', 'index', '', '', 'images/partner/logo.png|로고|http://google.com', '', 0),
(85, 'snw.onepage.theme1', '', 'index', '', '', '', 'cont', '', '', 'images/bg/biz10.jpg|베리 원페이지 테마!|지금 바로 구매하세요! |주소주소즈소', '', 0),
(86, 'snw.onepage.theme1', '', 'index', '', '', '', 'news', '', '', 'images/bg/bg-2.jpg|베리 원페이지 테마 하나로 끝!|설치부터 설정까지 너무나 쉬운 테마입니다. 관리자와 클라이언트 모두 만족할 테마! 베리 원페이지 테마로 최고의 비즈사이트를 만들어보세요. 저렴한 가격! 높은 퀄리티! 손쉬운 설정으로 간편하게 사이트를 만들어보세요!|버튼이름|http://naver.com|notice|faq|free', '', 0),
(87, 'snw.onepage.theme1', '', 'index', '', '', '', 'vboard2', '', '', 'gallery', '', 0),
(88, 'snw.onepage.theme1', '', 'portfolio', '', '', '', 'botable', '', '', 'images/bg/biz12.jpg|||', '', 0),
(89, 'snw.onepage.theme1', '', 'gallery', '', '', '', 'botable', '', '', 'images/bg/biz10.jpg', '', 0),
(90, 'snw.onepage.theme1', '', 'notice', '', '', '', 'botable', '', '', 'images/bg/biz13.jpg', '', 0),
(91, 'snw.onepage.theme1', '', 'faq', '', '', '', 'botable', '', '', 'images/bg/biz13.jpg', '', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `snw_theme`
--
ALTER TABLE `snw_theme`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `snw_theme`
--
ALTER TABLE `snw_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
