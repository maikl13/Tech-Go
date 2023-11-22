-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 09:18 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtechgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title_ar` text COLLATE utf8mb4_unicode_ci,
  `banner_title_en` text COLLATE utf8mb4_unicode_ci,
  `banner_description_ar` text COLLATE utf8mb4_unicode_ci,
  `banner_description_en` text COLLATE utf8mb4_unicode_ci,
  `banner_image` text COLLATE utf8mb4_unicode_ci,
  `banner_image_en` text COLLATE utf8mb4_unicode_ci,
  `our_goal_ar` text COLLATE utf8mb4_unicode_ci,
  `our_goal_en` text COLLATE utf8mb4_unicode_ci,
  `about_title_ar` text COLLATE utf8mb4_unicode_ci,
  `about_title_en` text COLLATE utf8mb4_unicode_ci,
  `about_description_ar` text COLLATE utf8mb4_unicode_ci,
  `about_description_en` text COLLATE utf8mb4_unicode_ci,
  `about_apps_count` int(11) NOT NULL DEFAULT '0',
  `about_websites_count` int(11) NOT NULL DEFAULT '0',
  `about_clients_count` int(11) NOT NULL DEFAULT '0',
  `about_experience_years` int(11) NOT NULL DEFAULT '0',
  `about_logo` text COLLATE utf8mb4_unicode_ci,
  `about_video` text COLLATE utf8mb4_unicode_ci,
  `about_video_en` text COLLATE utf8mb4_unicode_ci,
  `website_title_ar` text COLLATE utf8mb4_unicode_ci,
  `website_title_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `banner_title_ar`, `banner_title_en`, `banner_description_ar`, `banner_description_en`, `banner_image`, `banner_image_en`, `our_goal_ar`, `our_goal_en`, `about_title_ar`, `about_title_en`, `about_description_ar`, `about_description_en`, `about_apps_count`, `about_websites_count`, `about_clients_count`, `about_experience_years`, `about_logo`, `about_video`, `about_video_en`, `website_title_ar`, `website_title_en`, `created_at`, `updated_at`) VALUES
(1, 'تيك جو لحلول البرمجيات', 'Tech Go For IT Solutions', '[\r\n\"خيارك الاول لتحويل فكرتك ل واقع\",\r\n \"افضل سعر ل اعلي جودة\"\r\n]', '[\r\n\"Your first choice to turn your idea into reality\",\r\n \"Best price for top quality\"\r\n]', '1682870863289322616828708636743840.png', '1682869683298965916828696837560291.png', 'أخبرنا بفكرة تطبيقك وسنساعدك على إحياء هذه الفكرة من خلال\r\nإنشاء تطبيقات / موقع ويب من البداية يناسب احتياجاتك', 'Tell us your app idea and we\'ll help you bring that idea to life\r\nBuild apps/website from scratch that suits your needs', 'من نحن', 'About us', 'نحن نقوم بتوظيف امهر المهندسين من حول العالم ولدينا سجل حافل من العملاء حول العالم حيث اننا نحن نقدم جودة عالمية بافضل الخبرات والمطورين مع تكلفة مناسبة للجميع بداية من طلاب التخرج , مرورا باصحاب الشركات والافكار الناشئه , انتهاء بالشركات العملاقه  وأنظمة الدفع والبنوك', 'We employ the most skilled engineers from around the world, and we have a proven track record of clients around the world, as we provide international quality with the best expertise and developers with an appropriate cost for everyone, starting from graduate students, passing through the owners of companies and emerging ideas, ending with giant companies, payment systems and banks', 150, 75, 200, 10, '1682358978190747116823589786484728.png', '<iframe width=\"960\" height=\"720\" src=\"https://www.youtube.com/embed/lh_yDCvMHn0?&autoplay=1\" title=\"Tech-Go\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<iframe width=\"960\" height=\"720\" src=\"https://www.youtube.com/embed/FRbKLmejzYE?&autoplay=1\" title=\"Tech Go\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'شركة برمجيات تيك جو - شركة برمجة وتصميم مواقع الانترنت والجوال', 'Tech Go', '2022-03-15 18:54:02', '2023-05-04 10:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title_ar` text CHARACTER SET utf8,
  `title_en` text CHARACTER SET utf8,
  `content_ar` text CHARACTER SET utf8,
  `content_en` text CHARACTER SET utf8,
  `image` text,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'ما هي شركة تيك جو للبرمجيات ؟', 'What is Tech Go?', '<p style=\"text-align: right;\">تيك جو للبرمجيات هي إحدى أفضل الشركات المتخصصة في تقديم حلول برمجية متميزة ومبتكرة التي تقدم خدماتها في المملكة العربية السعودية و الامارات العربية المتحدة . تشتهر الشركة بجودة خدماتها العالية والأسعار المنافسة التي توفرها لعملائها</p>\r\n<p dir=\"rtl\" style=\"text-align: right;\">تقدم تيك جو للبرمجيات خدمات متعددة ومتكاملة في مجال برمجة البرمجيات وتطوير التطبيقات ونظم المعلومات وتقنيات الذكاء الاصطناعي، وتتميز بالاستجابة السريعة والاهتمام الكبير بتلبية احتياجات العملاء.</p>\r\n<p style=\"text-align: right;\"><span style=\"font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;\">تتميز تيك جو للبرمجيات بأسعارها المنافسة والمناسبة للعديد من العملاء، حيث تقدم حلولًا متميزة بأسعار معقولة وبأفضل جودة. إن الاستثمار في خدمات تيك جو للبرمجيات سيمنح عملك تحسينًا ملحوظًا في الأداء والإنتاجية، بالإضافة إلى توفير المال والوقت.</span></p>\r\n<p style=\"text-align: right;\">باختيار تيك جو للبرمجيات كمقدم لخدماتك في مجال البرمجة، فإنك تضمن لنفسك الاستفادة من مهارات وخبرات فريق عمل متخصص وذو كفاءة عالية في هذا المجال. فريق تيك جو للبرمجيات يهتم بتحديث نفسه بأحدث التقنيات والتطورات في مجال البرمجة لتقديم خدمات أفضل لعملائه.</p>\r\n<p style=\"text-align: right;\">باختصار، إذا كنت تبحث عن شركة برمجة موثوقة ومتميزة في المملكة العربية السعودية، تيك جو للبرمجيات هي الخيار الأمثل لك. تقدم الشركة حلولًا مبتكرة وبأسعار مناسبة وجودة عالية، وتضمن لك توفير المال والوقت في نفس الوقت. لا تتردد في التعامل مع تيك جو للبرمجيات وتحسين أداء عملك. يمكنك زيارة موقع الشركة لمعرفة المزيد عن خدماتها وما تقدمه من حلول برمجية متميزة، ويمكنك التواصل مع فريق العمل للحصول على المزيد من المعلومات والتفاصيل حول خدماتها.</p>\r\n<p style=\"text-align: right;\">إن استخدام الأدوات البرمجية الحديثة والتقنيات الحديثة في عملك يعد أمرًا حاسمًا في تحسين الإنتاجية وتوفير الوقت والمال، وتيك جو للبرمجيات تتيح لك ذلك بأسعار تناسب ميزانيتك.</p>\r\n<p style=\"text-align: right;\">لذلك، إذا كنت ترغب في الاستفادة من خدمات شركة برمجية متميزة في المملكة العربية السعودية، فتيك جو للبرمجيات هي الخيار الأمثل لك. لديها خبرة كبيرة في هذا <br />المجال وتوفر الأدوات والتقنيات اللازمة لتحسين أداء عملك. قم بزيارة <a href=\"../../../\">موقع الشركة</a> وتواصل معها لتحقيق أهدافك في مجال البرمجة.</p>\r\n<p style=\"text-align: right;\">الموقع الالكتروني<br /><a href=\"../../../\">https://tech-go.net/</a></p>\r\n<p style=\"text-align: right;\"><br />رقم التواصل و الدعم<br /><a href=\"https://wa.me/971502440179?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%20%D8%A7%D9%86%D8%A7%20%D9%85%D9%87%D8%AA%D9%85%20%D8%A8%D8%B7%D9%84%D8%A8%20%D8%A5%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A9%20%D8%AA%D9%82%D9%86%D9%8A%D8%A9\">+971502440179</a></p>\r\n<p style=\"text-align: right;\">&nbsp;</p>', '<p>TechGo Software is one of the best companies specialized in providing unique and innovative software solutions in the Kingdom of Saudi Arabia. The company is known for the high quality of its services and the competitive prices it provides to its customers.</p>\r\n<p>TechGo Software provides multiple and integrated services in the field of software programming, application development, information systems and artificial intelligence technologies, and is characterized by rapid response and great interest in meeting customer needs.</p>\r\n<p>TechGo Software is distinguished by its competitive prices that are suitable for many customers, as it offers premium solutions at reasonable prices and with the best quality. Investing in TechGo software services will give your business a significant improvement in performance and productivity, in addition to saving you money and time.</p>\r\n<p>By choosing TechGo Software as your service provider in the field of programming, you guarantee yourself to benefit from the skills and experience of a highly qualified and specialized team in this field. The Tech Go software team is interested in updating itself with the latest technologies and developments in the field of programming to provide better services to its customers.</p>\r\n<p>In short, if you are looking for a reliable and distinguished software company in the Kingdom of Saudi Arabia, TechGo Software is the perfect choice for you. The company offers innovative solutions at reasonable prices and high quality, and guarantees that you will save money and time at the same time. Do not hesitate to deal with Tech Go Software and improve your business performance. You can visit the company\'s website to learn more about its services and the unique software solutions it provides, and you can contact the work team to obtain more information and details about its services.</p>\r\n<p>The use of modern software tools and modern technologies in your work is crucial in improving productivity and saving time and money, and TechGo software allows you to do this at prices that suit your budget.</p>\r\n<p>Therefore, if you want to benefit from the services of a distinguished software company in the Kingdom of Saudi Arabia, TechGo Software is the perfect choice for you. She has extensive experience in this field and provides the necessary tools and techniques to improve your business performance. Visit the company\'s website and communicate with it to achieve your programming goals.</p>', 'JhMIXGHps1WSok5HWSwceZ0aySrlyDWFdd6K0U47.jpg', NULL, '2023-05-03 12:33:58', '2023-05-04 06:32:53'),
(7, 'كم تبلغ تكلفة انشاء تطبيق الكتروني ؟', 'How much is the cost of creating mobile application', '<p dir=\"rtl\">إنشاء تطبيق يعتبر عملية معقدة تتطلب الكثير من الوقت والجهد والموارد المالية. وتختلف تكلفة إنشاء التطبيقات بشكل كبير، حيث تعتمد على العديد من العوامل المختلفة، مثل المواصفات المطلوبة للتطبيق، وتعقيد البرمجيات المستخدمة في تطويره، ومدى الخبرة والمهارات لدى الشركة أو الفريلانسر المختار.</p>\r\n<p dir=\"rtl\">لتوضيح ذلك، فإن الأسعار المتداولة لإنشاء تطبيق تتراوح بين عدة آلاف إلى مئات الآلاف من الدولارات، وذلك يعتمد على تعقيد المشروع ومدى تخصص الشركة أو الفريلانسر المتعاقد معه.</p>\r\n<p dir=\"rtl\">بالنسبة للفريلانسر، فهو عبارة عن مستقل يقوم بعمله بشكل فردي، ويعتمد العمل معه على توفر الوقت والجهد للعميل في إدارة عملية التطوير، وغالبًا ما يكون السعر المتفق عليه أقل بكثير من تكلفة التعاقد مع شركة متخصصة في تطوير التطبيقات.</p>\r\n<p dir=\"rtl\">من ناحية أخرى، تعد الشركات المتخصصة في تطوير التطبيقات خيارًا جيدًا للعملاء الذين يرغبون في إنشاء تطبيقات ذات مواصفات عالية ومتقدمة، حيث توفر الشركات هذه الخدمات بفريق من المحترفين ذوي الخبرة والمهارات العالية.</p>\r\n<p dir=\"rtl\">إضافة إلى ذلك، توفر الشركات مميزات عدة، مثل توفير خدمات تطوير تطبيقات شاملة تبدأ من التصميم وتطوير البرمجيات وحتى مرحلة الاختبار والإطلاق، وكذلك توفير الدعم الفني المتخصص وخدمات ما بعد ذلك، يمكن للشركات تقديم مشاريع مخصصة تمامًا لاحتياجات العميل، وتحديد مواعيد التسليم النهائي للمشروع بشكل دقيق ومناسب لجميع الأطراف المعنية.</p>\r\n<p dir=\"rtl\">ومن بين هذه الشركات المتخصصة في تطوير التطبيقات، تأتي <a href=\"../../\">شركة تيك جو</a> كواحدة من الشركات الرائدة في هذا المجال. تقدم شركة تيك جو خدمات تطوير تطبيقات عالية الجودة وبأسعار تنافسية، حيث تبدأ التكلفة من 4500 دولار للمشروع، وتتزايد التكلفة بشكل تدريجي حسب تعقيد المشروع ومتطلباته المختلفة.</p>\r\n<p dir=\"rtl\">تتميز شركة تيك جو بفريق عمل من المحترفين ذوي الخبرة العالية والمهارات المتنوعة، كما تستخدم أحدث التقنيات والأدوات في عملية تطوير التطبيقات، ما يجعلها الشركة المثالية لتلبية احتياجات العملاء في جميع أنحاء العالم.</p>\r\n<p dir=\"rtl\">وبالنظر إلى كل هذه العوامل، فإن تحديد تكلفة إنشاء تطبيق يعتمد بشكل كبير على مواصفات التطبيق وتعقيد متطلباته. لذلك، يجب على العميل التفكير بشكل جيد فيما يريد من التطبيق وما هي المواصفات التي يرغب في تضمينها، كما يجب عليه اختيار الشركة أو الفريلانسر المناسبين لتلبية احتياجاته والعمل معهم بشكل فعال للحصول على نتائج مثالية وراضية للجميع.<br /><br /></p>\r\n<p dir=\"rtl\">وبشكل عام، يجب أن يتم تحديد تكلفة إنشاء التطبيق بشكل دقيق ومسبق لتجنب أي مفاجآت غير متوقعة خلال عملية التطوير، كما يجب النظر في عوامل أخرى مثل جودة العمل وتوفر الدعم الفني والصيانة بعد إطلاق التطبيق.</p>\r\n<p dir=\"rtl\">بالإضافة إلى ذلك، يمكن للعملاء الاستفادة من تجربة الشركات المتخصصة في تطوير التطبيقات لتحقيق أهدافهم بشكل أفضل وأسرع، وتوفير الوقت والجهد الذي يستغرقه إنشاء التطبيق بأنفسهم.</p>\r\n<p dir=\"rtl\">وبناءً على ذلك، فإن التعامل مع <a href=\"../../\">شركة تيك جو</a> سيوفر الوقت والجهد والمال للعملاء، حيث ستعمل الشركة على تلبية جميع احتياجات العميل ومتطلباته بأسلوب محترف وبأسعار مناسبة، كما ستوفر الدعم الفني والصيانة بعد إطلاق التطبيق.</p>\r\n<p dir=\"rtl\">وبالتالي، يمكن القول بأن تحديد تكلفة إنشاء تطبيق يتطلب النظر في العديد من العوامل والمتغيرات، ويجب اختيار الشركة المناسبة وتحديد المواصفات بدقة لتحقيق أفضل النتائج والحصول على تطبيق عالي الجودة والأداء المثالي لتلبية احتياجات العميل وتحقيق أهدافه في النهاية.<br /><br />بشكل عام، يمكن للعملاء الاستفادة من تجربة شركة تيك جو في تطوير التطبيقات، حيث توفر الشركة خدمات برمجة تطبيقات بأسعار مناسبة وجودة عالية، ويمكن للعميل الاختيار من بين عدة خيارات تتناسب مع ميزانيته واحتياجاته، كما يمكن للشركة تقديم النصح والإرشاد للعميل فيما يخص المواصفات والتصميم والوظائف المطلوبة لتحقيق أفضل النتائج.</p>\r\n<p dir=\"rtl\">وتضمن الشركة أيضًا الدعم الفني والصيانة بعد إطلاق التطبيق، مما يتيح للعميل الاستفادة من خبرة الشركة في تطوير التطبيقات وحل أي مشكلات تظهر بعد الإطلاق.</p>\r\n<p dir=\"rtl\">وبالتالي، يمكن القول بأن العمل مع شركة تيك جو يوفر العديد من المزايا بالمقارنة مع التعامل مع فريلانسر، حيث تضمن الشركة جودة العمل والالتزام بالمواعيد وتقديم الدعم الفني والصيانة، كما توفر خدمات برمجة التطبيقات بأسعار مناسبة وجودة عالية.</p>\r\n<p dir=\"rtl\">وفي النهاية، فإن تطوير تطبيقات يعد عملية مهمة ومعقدة، ويجب على العميل التفكير بجدية في تحديد تكلفة إنشاء التطبيق بشكل دقيق، واختيار الشركة المناسبة التي تلبي احتياجاته وتوفر جودة العمل والدعم الفني والصيانة بعد الإطلاق، وتوفر <a href=\"../../\">شركة تيك جو</a> كل هذه الخدمات والمزايا للعملاء.</p>', '<p>Creating an app is a complex process that requires a lot of time, effort, and financial resources. The cost of creating applications varies greatly, as it depends on many different factors, such as the specifications required for the application, the complexity of the software used in its development, and the extent of experience and skills of the chosen company or freelancer.</p>\r\n<p>To clarify this, the current prices for creating an application range from several thousand to hundreds of thousands of dollars, depending on the complexity of the project and the extent of the company\'s specialization or the contracted freelancer.</p>\r\n<p>As for the freelancer, it is a freelancer who does his work individually, and working with him depends on the client&rsquo;s availability of time and effort in managing the development process, and the agreed price is often much lower than the cost of contracting with a company specialized in application development.</p>\r\n<p>On the other hand, companies specializing in application development are a good option for customers who want to create applications with high specifications and advanced, as companies provide these services with a team of highly skilled and experienced professionals.</p>\r\n<p>In addition, companies provide several advantages, such as providing comprehensive application development services that start from design and software development to the testing and launch phase, as well as providing specialized technical support and after-services. Companies can provide projects that are completely customized to the client\'s needs, and set final project delivery dates in an appropriate manner. Accurate and appropriate for all parties involved.</p>\r\n<p>Among these companies specializing in application development, TechGo is one of the leading companies in this field. Tech Go provides high-quality application development services at competitive prices, as the cost starts from $4,500 for a project, and the cost increases gradually according to the complexity of the project and its various requirements.</p>\r\n<p>TechGo is characterized by a team of highly experienced professionals with diverse skills, and uses the latest technologies and tools in the application development process, which makes it the ideal company to meet the needs of customers all over the world.</p>\r\n<p>Considering all these factors, determining the cost of building an application depends largely on the specifications of the application and the complexity of its requirements. Therefore, the customer must think carefully about what he wants from the application and what specifications he wants to include, and he must choose the appropriate company or freelancer to meet his needs and work with them effectively to obtain ideal and satisfied results for everyone.</p>\r\n<p>&nbsp;</p>\r\n<p>In general, the cost of creating the application must be determined accurately and in advance to avoid any unexpected surprises during the development process, and other factors such as the quality of work and the availability of technical support and maintenance after the launch of the application must be considered.</p>\r\n<p>In addition, customers can benefit from the experience of companies specialized in developing applications to achieve their goals better and faster, and save the time and effort that it takes to create the application themselves.</p>\r\n<p>Accordingly, dealing with TechGo will save time, effort, and money for customers, as the company will work to meet all the customer\'s needs and requirements in a professional manner at reasonable prices, and will also provide technical support and maintenance after launching the application.</p>\r\n<p>Thus, it can be said that determining the cost of creating an application requires consideration of many factors and variables, and the appropriate company must be chosen and the specifications must be accurately defined in order to achieve the best results and obtain a high-quality application and ideal performance to meet the customer\'s needs and ultimately achieve his goals.</p>\r\n<p>In general, customers can benefit from the experience of TechGo in developing applications, as the company provides application programming services at reasonable prices and high quality, and the customer can choose from several options that suit his budget and needs, and the company can also provide advice and guidance to the customer regarding specifications, design and functions required to achieve the best results.</p>\r\n<p>The company also guarantees technical support and maintenance after launching the application, allowing the customer to benefit from the company\'s experience in developing applications and solving any problems that arise after the launch.</p>\r\n<p>Thus, it can be said that working with TechGo offers many advantages compared to dealing with Freelancer, as the company guarantees quality work, punctuality, technical support and maintenance, and provides application programming services at reasonable prices and high quality.</p>\r\n<p>In the end, developing applications is an important and complex process, and the customer must think seriously about determining the cost of creating the application accurately, and choose the appropriate company that meets his needs and provides quality work, technical support and maintenance after launch, and Tech Go provides all these services and benefits to customers.</p>', 'JREJWMO9ZkIixHhdm4mxqgBOqgfQjYONK3S4ABoR.jpg', NULL, '2023-05-06 21:58:43', '2023-05-06 23:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'arabi_ip', NULL, '2021-11-22 19:32:13', '2021-08-28 11:10:46'),
(2, 'arabi_db', NULL, '2021-11-22 19:32:15', '2021-04-08 13:40:10'),
(3, 'access_token', NULL, '2021-11-22 19:32:18', '2021-08-28 11:10:46'),
(4, 'db_version', NULL, '2021-11-22 19:32:20', '0000-00-00 00:00:00'),
(5, 'website_views', '15545', '2023-05-10 16:17:47', '2023-05-11 02:17:47'),
(6, 'whatsapp_btn_clicks', '2304', '2023-05-10 16:08:56', '2023-05-11 02:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `title`, `body`, `email`, `phone`, `type`, `created_at`, `updated_at`) VALUES
(15, 'dfgdfsd', 'dsfsdfsd', 'dsfsdfdsfsdkjfbsdhjkcbsadjhlbcsdljkhbcdhlsajcbsdlhjabgshljdghsaljdasd', 'sdfsdfsd', '5645645654', 'اختر نوع الرساله', '2022-02-27 09:42:48', '2022-02-27 09:42:48'),
(16, 'hjuiy', 'rtyrt', 'tryrtyrtyrt', 'yrty', '8785654778', 'اختر نوع الرساله', '2022-03-13 11:24:26', '2022-03-13 11:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `title_ar` mediumtext,
  `title_en` mediumtext,
  `description_ar` mediumtext,
  `description_en` mediumtext,
  `image` mediumtext,
  `position_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `position_id`, `created_at`, `updated_at`) VALUES
(1, 'يسي بخيت', 'Yassa Bekhit', NULL, NULL, '16825161741654478767649.jpeg', 10, '2023-04-26 13:36:14', '2023-04-26 23:36:14'),
(2, 'مايكل امجد', 'Michael Amged', NULL, NULL, '16837346191682464182266599736_1258925547948971_7894969251791750121_n.jpg', 11, '2023-05-10 16:03:39', '2023-05-11 02:03:39'),
(3, 'يوسف رجب', 'youssef ragab', NULL, NULL, '16824633121625549621954.jpeg', 3, '2023-04-25 22:55:12', '2023-04-26 08:55:12'),
(4, 'مها ابو عبيد', 'Maha Abu Obaid’', NULL, NULL, '168373450416824633811608459131199.jpeg', 3, '2023-05-10 16:01:44', '2023-05-11 02:01:44'),
(5, 'مروان مبروك', 'Marawan Moubark', NULL, NULL, '16824635061617254393416.jpeg', 5, '2023-04-26 08:58:26', '2023-04-26 08:58:26'),
(6, 'احمد عسكر', 'Ahmed Asker', NULL, NULL, '16824635821679999184902.jpeg', 13, '2023-04-26 08:59:42', '2023-04-26 08:59:42'),
(7, 'شيماء ذكريا', 'Shimaa Zakarya', NULL, NULL, '16824639021675746960244.jpeg', 4, '2023-04-25 23:05:02', '2023-04-26 09:05:02'),
(8, 'عبدالله غريب', 'Abdallh Ghareeb', NULL, NULL, '16837347141682706060IMG_1243.jpeg', 15, '2023-05-10 16:05:14', '2023-05-11 02:05:14'),
(9, 'يوستينا نشآت', 'Yostena Nashat', NULL, NULL, '16824639931667656310657.jpeg', 6, '2023-04-26 09:06:33', '2023-04-26 09:06:33'),
(10, 'اسماء مبروك', 'Asmaa Mabrouk', NULL, NULL, '168373477616824640911602091710528.jpeg', 14, '2023-05-10 16:06:16', '2023-05-11 02:06:16'),
(11, 'ابراهيم احمد', 'Ibrahim Ahmed', NULL, NULL, '16825159871669072450394.jpeg', 5, '2023-04-26 23:33:07', '2023-04-26 23:33:07'),
(12, 'اماني محمد', 'Amany Mohamed', NULL, NULL, '1682705614IMG_1236.jpg', 7, '2023-04-28 18:13:34', '2023-04-29 04:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `employees_categories`
--

CREATE TABLE `employees_categories` (
  `id` int(11) NOT NULL,
  `title_ar` mediumtext,
  `title_en` mediumtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees_categories`
--

INSERT INTO `employees_categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(3, 'مطور ويب', 'web developer', '2023-04-16 08:59:23', '2023-04-16 10:59:23'),
(4, 'مصمم واجهات', 'UI/UX Designer', '2023-04-25 23:04:11', '2023-04-16 10:59:44'),
(5, 'مطور فلاتر', 'Flutter Developer', '2023-04-16 08:59:57', '2023-04-16 10:59:57'),
(6, 'مختبر انظمة', 'Applications Tester', '2023-04-26 08:46:58', '2023-04-26 01:46:58'),
(7, 'محلل انظمة', 'Systems Analyst', '2023-04-26 08:47:25', '2023-04-26 01:47:25'),
(10, 'المدير التنفيذي', 'CEO Founder', '2023-04-26 13:40:15', '2023-04-26 01:50:32'),
(11, 'المدير التقني', 'CTO Founder', '2023-04-26 13:40:22', '2023-04-26 01:51:20'),
(13, 'مصمم موشن جرافيك', 'Motion Graphic Designer', '2023-04-26 08:53:05', '2023-04-26 01:53:05'),
(14, 'مختص تطوير الاعمال', 'Business Development', '2023-04-26 08:53:45', '2023-04-26 01:53:45'),
(15, 'مطور نيتڤ', 'Native Developer', '2023-04-28 18:23:07', '2023-04-28 19:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` text,
  `order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question_ar`, `question_en`, `order`, `status`, `created_at`, `updated_at`) VALUES
(8, 'من اين سمعت عن جمعية البيوت السعيدة ؟', 'where did you hear about us ?', 0, 1, '2023-02-16 17:49:00', '2023-02-16 17:49:00'),
(9, 'هل تجد برامجنا مفيدة ؟', 'do you find our programs useful ?', 0, 1, '2023-02-13 19:34:09', '2023-02-13 19:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `faq_answers`
--

CREATE TABLE `faq_answers` (
  `id` int(11) NOT NULL,
  `faq_id` int(11) NOT NULL,
  `answer_ar` text,
  `answer_en` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_answers`
--

INSERT INTO `faq_answers` (`id`, `faq_id`, `answer_ar`, `answer_en`, `created_at`, `updated_at`) VALUES
(10, 8, 'التواصل الاجتماعي', 'social media', '2023-02-13 19:33:05', '2023-02-13 19:33:05'),
(11, 8, 'صديق', 'friend', '2023-02-13 19:33:05', '2023-02-13 19:33:05'),
(12, 8, 'الأخبار', 'news', '2023-02-13 19:33:05', '2023-02-13 19:33:05'),
(13, 9, 'نعم', 'yes', '2023-02-13 19:34:09', '2023-02-13 19:34:09'),
(14, 9, 'لا', 'no', '2023-02-13 19:34:09', '2023-02-13 19:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci,
  `title_en` text COLLATE utf8mb4_unicode_ci,
  `short_image` text COLLATE utf8mb4_unicode_ci,
  `program_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title_ar`, `title_en`, `short_image`, `program_id`, `created_at`, `updated_at`) VALUES
(4, NULL, NULL, '1682386770888811216823867703190003', NULL, '2023-04-16 08:55:00', '2023-04-19 06:57:36'),
(5, NULL, NULL, '1682390472690392616823904723281725', NULL, '2023-04-16 08:55:08', '2023-04-19 06:57:49'),
(6, NULL, NULL, '1682387210802538716823872103241273', NULL, '2023-04-16 08:55:15', '2023-04-19 06:58:00'),
(7, NULL, NULL, '1682390289143395816823902899776338', NULL, '2023-04-16 08:55:21', '2023-04-19 06:58:13'),
(8, NULL, NULL, '1681883907803825716818839072749754', NULL, '2023-04-16 08:55:29', '2023-04-19 06:58:27'),
(9, NULL, NULL, '1682387573572722216823875736346815', NULL, '2023-04-16 08:55:36', '2023-04-19 06:58:33'),
(10, NULL, NULL, '1682387134653932516823871345154348', NULL, '2023-04-16 08:55:45', '2023-04-19 06:58:38'),
(11, NULL, NULL, '1681883856692918616818838564273042', NULL, '2023-04-25 11:33:55', '2023-04-25 11:33:55'),
(14, NULL, NULL, '1681883918361842916818839186597636', NULL, '2023-04-25 11:45:34', '2023-04-25 11:45:34'),
(17, NULL, NULL, '1681883913560075316818839133819900', NULL, '2023-04-25 11:57:49', '2023-04-25 11:57:49'),
(22, NULL, NULL, '1682390391803742916823903917567475', NULL, '2023-04-25 12:39:51', '2023-04-25 12:39:51'),
(23, NULL, NULL, '1682387015980970016823870158969908', NULL, '2023-04-25 12:41:12', '2023-04-25 12:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `image` text CHARACTER SET utf8,
  `description_ar` text CHARACTER SET utf8,
  `description_en` text CHARACTER SET utf8,
  `gallery_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `image`, `description_ar`, `description_en`, `gallery_id`, `created_at`, `updated_at`) VALUES
(3, '1677451941slider.jpg', 'وصف الصورة', 'image description', 3, '2023-02-26 23:13:16', '2023-02-26 23:13:16'),
(5, '1677452640doing-charity-work-featured-images.png', '3213123', 'image description', 3, '2023-02-26 23:13:17', '2023-02-26 23:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `key_value`
--

CREATE TABLE `key_value` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_requests`
--

CREATE TABLE `medical_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `company_name` text COLLATE utf8mb4_unicode_ci,
  `company_location` text COLLATE utf8mb4_unicode_ci,
  `phone_whatsapp` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_requests`
--

INSERT INTO `medical_requests` (`id`, `name`, `email`, `phone`, `subject`, `company_name`, `company_location`, `phone_whatsapp`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Ahmed elsayed', 'ahmedgimo74@gmail.com', '00201033954945', 'اكادميه صناعه  الاحذيه و الشنط', 'جيم الاستثماريه للمصنوعات الجلديه', 'العبور', '00201033954945', 'برجاء التواصل لتحديد ميعاد', '2023-05-05 06:06:09', '2023-05-05 06:06:09'),
(9, 'Ahmed Sayed', 'monospace2022@gmail.com', '+201028887119', 'اريد ان اعمل معكم', 'monospace', 'monospace', '01028887119', 'انا احمد من مصر عجبني شغلكم جدا وحاجة في قمة الروعة واريد العمل معكم \r\nوخبرتي +4 سنوات وانا fullstack web-dev \r\n\r\nمتحمس للعمل معكم ورجاء تواصلو معي \r\nوشكرا مقدما', '2023-05-05 13:19:56', '2023-05-05 13:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(0, '2022_03_15_194216_create_abouts_table', 2),
(0, '2022_03_15_194746_create_videos_table', 3),
(0, '2022_03_15_233933_create_branches_table', 4),
(0, '2022_03_16_183517_create_stories_table', 5),
(0, '2022_03_16_190510_create_features_table', 6),
(0, '2022_03_16_191711_create_reviews_table', 7),
(0, '2022_03_16_194913_create_numbers_table', 8),
(0, '2022_03_17_190528_create_galleries_table', 9),
(0, '2022_03_17_194134_create_medical_requests_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(5, 'youssefmousa2001@gmail.com', '2023-04-19 10:43:05', '2023-04-19 10:43:05'),
(6, 'youssefalex123@gmail.com', '2023-04-19 10:45:29', '2023-04-19 10:45:29'),
(7, 'joe.labs2019@gmail.com', '2023-04-19 10:46:05', '2023-04-19 10:46:05'),
(8, 'ELALLAM.ILYAS@ofppt-edu.ma', '2023-05-02 05:38:50', '2023-05-02 05:38:50'),
(9, NULL, '2023-05-05 09:12:28', '2023-05-05 09:12:28'),
(10, 'islam.sharaf@hotmail.com', '2023-05-08 22:56:59', '2023-05-08 22:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `body`, `created_at`, `updated_at`) VALUES
(5, 'من نحن', 'about_us', '<p dir=\"rtl\" style=\"text-align: right;\">تطبيق حجزك الطبي اهلا وسهلا</p>', '2021-07-31 15:38:27', '2022-02-01 12:12:19'),
(6, 'سياسة الخصوصية', 'privacy_policy', '<div class=\"container\">\r\n<section style=\"text-align: left; margin: 10px; direction: ltr;\">\r\n<p class=\"p1\"><span class=\"s2\">hajzakaltibi</span><span class=\"s1\">&nbsp;app as a Free app.<span class=\"Apple-converted-space\">&nbsp;</span></span></p>\r\n<p class=\"p1\"><span class=\"s1\">This SERVICE is provided by <a href=\"http://supercode.ps\">Super Code</a><span class=\"Apple-converted-space\">&nbsp;</span></span></p>\r\n<p class=\"p1\"><span class=\"s1\">This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.</span></p>\r\n<p class=\"p1\"><span class=\"s1\">If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.</span></p>\r\n<p class=\"p1\"><span class=\"s1\">The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at</span><span class=\"s2\"> XMarket&nbsp;</span><span class=\"s1\">unless otherwise defined in this Privacy Policy.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Information Collection and Use</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information, including but not limited to First name ,last name ,E-mail ,Phone number ,address. The information that I request will be retained on your device and is not collected by me in any way.</span></p>\r\n<p class=\"p1\"><span class=\"s1\">The app does use third party services that may collect information used to identify you.</span></p>\r\n<p class=\"p1\"><span class=\"s1\">Link to privacy policy of third party service providers used by the app</span></p>\r\n<ul class=\"ul1\">\r\n<li class=\"li2\"><span class=\"s3\"> <a href=\"https://www.google.com/policies/privacy/\"><span class=\"s4\">Google Play Services</span></a> </span></li>\r\n</ul>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Log Data</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (&ldquo;IP&rdquo;) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Cookies</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device\'s internal memory.</span></p>\r\n<p class=\"p1\"><span class=\"s1\">This Service does not use these &ldquo;cookies&rdquo; explicitly. However, the app may use third party code and libraries that use &ldquo;cookies&rdquo; to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Service Providers</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">I may employ third-party companies and individuals due to the following reasons:</span></p>\r\n<ul class=\"ul1\">\r\n<li class=\"li1\"><span class=\"s1\">To facilitate our Service;</span></li>\r\n<li class=\"li1\"><span class=\"s1\">To provide the Service on our behalf;</span></li>\r\n<li class=\"li1\"><span class=\"s1\">To perform Service-related services; or</span></li>\r\n<li class=\"li1\"><span class=\"s1\">To assist us in analyzing how our Service is used.</span></li>\r\n</ul>\r\n<p class=\"p1\"><span class=\"s1\">I want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Security</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Links to Other Sites</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Children&rsquo;s Privacy</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">These Services do not address anyone under the age of 13. I do not knowingly collect personally identifiable information from children under 13. In the case I discover that a child under 13 has provided me with personal information, I immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact me so that I will be able to do necessary actions.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Changes to This Privacy Policy</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately after they are posted on this page.</span></p>\r\n<p class=\"p1\"><span class=\"s1\"><strong>Contact Us</strong></span></p>\r\n<p class=\"p1\"><span class=\"s1\">If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me<span class=\"Apple-converted-space\">&nbsp;</span></span></p>\r\n</section>\r\n</div>', '2021-07-31 15:40:34', '2022-01-30 10:02:17'),
(7, 'شروط الإستخدام', 'terms_of_use', '<p dir=\"rtl\"><span style=\"font-size: 18pt;\"><strong>الشروط والأحكام</strong></span><br />مرحبًا بكم في &nbsp;موقع وتطبيق \"حجزك الطبي\".<br />يعمل الموقع والتطبيق كمتجر الكتروني مختص في &nbsp;بيع منتجات الأدوات المنزلية والتحف والهدايا، حيث يساعد المتصفح من شراء السلع التي يرغب بها، وفق الشروط والأحكام المنصوص عليها في هذه الوثيقة وسياسة الخصوصية.<br /><strong>أولاً: تعريفات المصطلحات</strong><br /><strong>ثانيا: الطبيعة القانونية للشروط والأحكام والسياسات</strong><br /><strong>ثالثا: الموافقة والأهلية القانونية</strong><br /><strong>رابعا: الاتصالات</strong><br /><strong>سابعًا: حقوق الملكية الفكرية</strong><br /><strong>ثامنًا: التراخيص الممنوحة</strong><br /><strong>تاسعا: إلغاء الاتفاق</strong><br /><strong>عاشرا: القانون واجب التطبيق والمحاكم المختصة</strong><br /><strong>الحادي عشر: الإشعارات</strong><br /><strong>الثاني عشر: اللغة</strong><br /><strong>الثالث عشر: أحكام خاصة</strong><br />------------------------------<br /><strong>أولاً: تعريفات المصطلحات</strong><br />في هذه الاتفاقية، وما لم يقتضي السياق خلاف ذلك يكون للمصطلحات التالية المعاني المشار إليها.<br />\"التطبيق\" أو \" الموقع\" أو \"X-Market \" أو \"نحن\" أو \"ضمير المتكلم\" أو \"ضمير الملكية\": يشير إلى تطبيق X-Market.<br />\"المستخدم\" أو \"أنت\" أو \"ضمير الملكية للمخاطب\": يعني الشخص الذي يزور التطبيق أو الموقع، أو يستخدمه، أو يُسجل عضوية بالتطبيق.<br />\"المشترك\" يشير إلى كل شخص يشترك معنا من خلال تسجيل عضوية في التطبيق أو الموقع الخاص بنا .<br />\"الخدمات\" تشير إلى الخدمات التي نقدمها، المتمثلة في بيع الأدوات المنزلية والتحف والهدايا.<br />\"الاتفاقية\" تشير إلى هذه الوثيقة وما تتضمنه من شروط وأحكام، وكذلك سياسة الخصوصية، وكافة سياسات تقديم الخدمات، وكافة الاتفاقيات والسياسات المكملة والمنفذة لاتفاقك معنا، بالإضافة لأي سياسة أخرى مضافة من طرفنا.<br />\"ملحقات الاتفاقية\" تتمثل في كافة أوصاف الخدمة التي يتم نشرها على الصفحة الرئيسية للتطبيق أو الموقع &nbsp;أو الصفحات الفرعية، وكذلك كافة العقود المكملة لهذه الاتفاقية، والتي تعد جزء لا يتجزأ من هذه الاتفاقية.<br />\"أطراف الاتفاقية\" يشير إلى كافة الأشخاص الذين يخضعون للشروط والأحكام المنصوص عليها في هذه الاتفاقية، بما تتضمنه من حقوق والتزامات.<br /><strong>ثانيا: الطبيعة القانونية للشروط والأحكام والسياسات</strong><br />1. تعد هذه الاتفاقية وملحقاتها الاتفاق الكامل والنهائي بين التطبيق من ناحية، وأي شخص يقوم بزيارة التطبيق أو الموقع &nbsp;أو يستخدمه أو يستخدم أي من خصائصه أو ميزاته من ناحية أخرى.<br />2. تعد هذه الاتفاقية عقدًا صحيحًا مكتملاً الشروط والأركان القانونية، نافذًا في مواجهة جميع الأطراف المذكورة، وأحكامه والتزاماته ملزمة لهم جميعًا، ولا يجوز لأحد التحلل منها أو إنهائها طالما أنتجت آثارها القانونية.<br />3. يقر جميع الأطراف أن هذه الاتفاقية تشكل كامل الاتفاق بينهم، وقد اتفقوا على أنهم لم يعتمدوا على أي تأكيدات، شفوية كانت أم كتابية، في الموافقة على هذه الاتفاقية بخلاف الأحكام المبينة فيها.<br />4. يعد وصف الخدمات والصفحات الفرعية للموقع التي تم إعدادها من قِبل التطبيق جزء لا يتجزأ من هذه الاتفاقية.<br />5. تعتبر العقود المكملة لهذه الاتفاقية جزء لا يتجزأ منها، ويسري عليها ما يسري على هذه الاتفاقية من شروط وأحكام، وترتبط بهذه الاتفاقية ارتباطًا لا يقبل التجزئة وجودًا وعدمًا.<br />6. يكون للتعديلات الواردة على هذه الاتفاقية نفس الحكم والأثر القانوني لهذه الاتفاقية.<br /><strong>ثالثا: الموافقة والأهلية القانونية</strong><br />تقر بأن لديك الأهلية القانونية اللازمة للإبرام والموافقة على هذه الاتفاقية، وأن لديك الصلاحيات القانونية الكاملة غير المقيدة طبقًا للشروط التالية:<br />1. يشترط في مُستخدِم تطبيق X-Market أن يبلغ من العمر 13 عامًا فأكثر، فإذا لم تبلغ من العمر 13 عامًا فيجب عليك استخدام التطبيق أو شراء الخدمات الخاصة بنا عن طريق من ينوب عنك قانونًا.<br />2. مع عدم الإخلال بأي حقوق أخرى للتطبيق بموجب هذه الاتفاقية أو القانون، يحتفظ التطبيق والموقع بالحق في تقييد وصولك إليه أو إلغاء عضويتك إذا رأى أنك لم تبلغ سن 13 عامًا.<br />3. يشترط في من يستخدم التطبيق والموقع أن يتوافر فيه الأهلية القانونية اللازمة لإبرام العقود، وألا يكون مصاب بأي من عوارض أو موانع الأهلية، ونحن غير مسئولين عن التحقق من أهلية أيًا من مستخدمي التطبيق والموقع.<br />4. باستخدامك خدمات التطبيق فأنت توافق على هذه الاتفاقية، وتقر بأنك ملزمًا قانونًا بالشروط والأحكام المنصوص عليها في هذه الوثيقة أو تعديلاتها.<br />5. يعد استخدامك للتطبيق أو دخولك معنا في أي اتفاقية بمثابة توقيع إلكتروني على هذه الاتفاقية.<br /><strong>رابعا: الاتصالات</strong><br />1. أنت توافق على تلقي الاتصالات منا، وسوف نتواصل معك عن طريق البريد الالكتروني أو رقم الجوال أو عن طريق نشر إشعارات عبر التطبيق أو من خلال خدمات التطبيق الأخرى.<br />2. أنت توافق على أن جميع الاتفاقات والإشعارات والافصاحات وغيرها من الاتصالات التي نقدمها لك الكترونيًا تستوفي كافة الشروط القانونية كما لو كانت هذه الاتصالات خطية، وتقوم مقامها في إنتاج آثارها القانونية.<br />3. يتطلب التطبيق والموقع الإلكتروني موافقتك أثناء عملية التسجيل على قيامنا بإرسال رسائل على بريدك الالكتروني أو هاتفك الجوال أو عبر الموقع لأغراض ترويجية، وذلك لإعلامك بأي تغييرات أو ميزات أو أنشطة جديدة تضاف إلى التطبيق والموقع الخاص بنا.<br />4. إذا قررت في أي وقت أنك لا ترغب في تلقي رسائل ترويجية، يمكنك تعطيل تلقي هذه الرسائل عن طريق مراسلتنا، ولكن في هذه الحالة لا نضمن تمتعك بخدماتنا بشكل كامل.<br />5. أي إشعارات مطلوب تبليغها إلى التطبيق بمقتضى هذه الاتفاقية يجب أن يتم إرسالها عن طريق الخواص المتاحة من قِبلنا داخل التطبيق أو الموقع الإلكتروني.<br /><strong>خامسا: حقوق الملكية الفكرية</strong><br />1. التطبيق والموقع الإلكتروني والأفكار المُعبَر عنها داخله، هي حقوق ملكية فكرية خالصة لنا، وأي تقليد أو اقتباس للتطبيق أو بعض خدماته (بما في ذلك الأفكار والنصوص والرموز والبرمجيات) يعد انتهاكًا لحقوق التأليف والنشر الخاصة بنا، وسنقوم معه باتخاذ كافة الإجراءات القانونية ضد مرتكب الانتهاكات المذكورة.<br />2. جميع المحتويات المضمنة أو المتاحة ضمن خدمات التطبيق مثل (النصوص والشعارات والصور والرسوم البيانية والتسجيلات الصوتية وأيقونات الأزرار والمحتويات الرقمية والمواد التي يتم إعادة تحميلها والبرمجيات وتجميع البيانات) هي ملك للتطبيق والموقع الخاص بنا، وهي محمية من قِبل قوانين الدولة المحلية وقوانين حقوق التأليف والنشر الدولية.<br />3. تجميع كافة البيانات المدرجة في خدمات التطبيق أو إتاحتها من قِبل أيًا من خدماتنا هو ملك حصري وخاص بالتطبيق والموقع، ومحمية بموجب قوانين حقوق الطبع والنشر داخل دولة فلسطين والعربية والدولية &nbsp;وكذلك محمية بموجب الاتفاقيات الدولية السارية، مثل اتفاقية برن، واتفاقية تربس.<br /><strong>سادسا: التراخيص الممنوحة</strong><br />1. يمنحك التطبيق والموقع ترخيصًا محدودًا وغير حصري لاستخدام تطبيق وموقع\" X-Market\"، ويحظر عليك التنازل عن هذا الترخيص إلى الغير.<br />2. لا يشمل هذا الترخيص أي نسخ للمعلومات المتوفرة عن الحساب لصالح الغير، أو أي استخدام لوسائل استخراج البيانات أو أي استخدام لأدوات جمع واستخلاص البيانات المماثلة.<br />3. لا يجوز لك إعادة إنتاج أو عمل نسخة مطابقة لهذا التطبيق أو الموقع، أو نسخ أو بيع أو إعادة بيع أي جزء منه، أو استخدامه بصورة مغايرة في أغراض الاستغلال التجاري أو غير التجاري له دون الحصول على موافقة كتابية صريحة من التطبيق والموقع.<br />4. لا يجوز لك استخدام أي علامات وصفية أو أي \"نص مخفي\" آخر يستغل اسم التطبيق أو علاماته التجارية بدون موافقة كتابية صريحة من الموقع.<br />5. غير مرخص لك بأي شكل من الأشكال نشر أي روابط لمواقع أو تطبيقات أخرى عبر التطبيق أو من خلال أي خواص متاحة داخل التطبيق.<br />6. يجوز لك استخدام خدماتنا بالشكل المسموح به قانونًا فقط، ووفقًا لشروط هذه الاتفاقية.<br />7. لا يجوز لك إساءة استخدام خدماتنا بأي شكل من الأشكال.<br />8. تنتهي التراخيص الممنوحة من قِبلنا إذا لم تلتزم بشروط الاستخدام هذه أو أي شروط خدمة أخرى.<br />9. جميع الحقوق غير الممنوحة لك صراحة في شروط الاستخدام هذه أو أي شروط خدمة أخرى يحتفظ بها التطبيق.<br /><strong>سابعا: المسئولية القانونية لأطراف الاتفاقية</strong><br />1. أنت توافق صراحة على أنك تستخدم التطبيق والموقع على مسئوليتك الشخصية.<br />2. أنت مسئولاً عن المحافظة على استخدام التطبيق والموقع بكل جدية ومصداقية وتكون ملزمًا بالتعويض عن أي خسائر أو أضرار &nbsp;قد تلحق بالتطبيق نتيجة أي استخدام غير شرعي أو غير مفوض من قِبلنا.<br />3. أنت توافق على عدم استخدام التطبيق والموقع أو أي خدمة تقدم من خلاله بطريقة غير قانونية أو احتيالية أو معادية للمجتمع على النحو الذي نقدره.<br />4. أنت توافق على عدم إرسال أي رسائل تتسم بالتمييز العنصري أو تحتوي على سب وقذف أو ألفاظ نابية أو صور خليعة أو فاحشة، أو تتسم بوجه عام بأنها ذات \"ذوق رديء\".<br />5. في حالة مخالفة المستخدم لأي من شروط أو أحكام هذه الاتفاقية فيكون من حقنا اتخاذ إجراء إداري فقط داخل حساب المستخدم يتمثل في وقف العضوية لفترة من الزمن أو عمل حظر دائم للمستخدم المخالف، ولا يحق له في هذه الحالة التسجيل مرة أخرى إلا بموافقة صريحة من فريق الدعم الفني.<br />6. أنت توافق على تعويض التطبيق والموقع وإبراء مسئوليته والدفاع عنه ضد كافة الدعاوى والمطالبات التي قد يرفعها أو يطالب بها الغير نتيجة استخدامك للتطبيق، أو بسبب قيامك بانتهاك هذه الشروط والبنود أو بالإخلال بحقوق المستخدمين الآخرين.<br />7. إذا قمت بانتهاك اتفاقية المستخدم هذه، فإن التطبيق يحتفظ بحقه في استعادة أية مبالغ مستحقة عليك، وأي خسائر أو أضرار تسببت فيها وللتطبيق الحق في اتخاذ الإجراءات القانونية أو اللجوء للمحاكم المختصة لرفع دعاوى مدنية أو جنائية ضدك.<br />8. التطبيق لا يضمن اتخاذه إجراءات ضد كل الانتهاكات التي قد تحدث لاتفاقية الاستخدام هذه، ولا يعني عدم اتخاذنا للإجراءات القانونية في أي من حالات الانتهاك تنازلاً عن حقنا في اتخاذ هذه الإجراءات في أي وقت نراه مناسبًا.<br />9. يجب عليك الالتزام بجميع القوانين واللوائح المعمول بها داخل الدولة التي تستخدم التطبيق من خلالها وذلك فيما يتعلق باستخدامك للتطبيق، وتتحمل كافة المسئوليات الناشئة في حالة إخلالك بهذه القوانين أو اللوائح، كما تلتزم بجميع الشروط والأحكام المنصوص عليها في هذه الاتفاقية.<br /><strong>ثامنا: التعديلات</strong><br />1. يلتزم المستخدم بما يجريه الموقع من تغييرات وتعديلات في السياسات المطبقة وعليه قبول أيه تعديلات يراها التطبيق لازمة.<br />2. يجوز لنا في أي وقت إجراء أية تعديلات أو تحسينات نراها ضرورية على التطبيق والموقع لزيادة فاعليته، ويلتزم المستخدم بأية توجيهات أو تعليمات يقدمها التطبيق إليه في هذا الخصوص.<br />3. لا يجوز لك تغيير أي بنود من هذا الاتفاق أو تعديلها أو استبدالها بدون موافقة مكتوبة من التطبيق والموقع.<br />4. يجوز لنا تعديل أو تحديث هذه الشروط والأحكام \"اتفاقية الاستخدام\" الخاصة باستخدام التطبيق والموقع بدون إرسال إخطار إليك بذلك؛ لذا عليك مراجعة هذه الاتفاقية بشكل دوري.<br />5. أنت توافق على الالتزام بكافة الشروط والبنود الإضافية التي ستتاح لك والتي تتعلق باستخدام أي من الخدمات المتاحة عبر التطبيق، ويتم دمج هذه الشروط والبنود الإضافية إلى هذه الاتفاقية.<br />تاسعا: تحويل الحقوق والالتزامات<br />1. يحق للتطبيق تحويل كافة حقوقه الواردة في هذه الاتفاقية للغير دون أي اعتراض من المستخدم، ويلتزم الجميع بتنفيذ كافة التزاماتهم الواردة في هذه الاتفاقية قِبل المحال إليه فور إخطارهم بالحوالة، ويحق للمحال إليه اتخاذ كافة الإجراءات القانونية قِبل المتقاعس عن تنفيذ التزاماته بموجب هذه الاتفاقية.<br />2. لا يجوز لك التنازل عن التزاماتك وحقوقك بموجب هذه الاتفاقية، أو أن تعهد بإدارة حسابك بالتطبيق إلى طرف ثالث إلا بعد الحصول على موافقة خطية منا.<br /><strong>تاسعا: إلغاء الاتفاق</strong><br />يعتبر الاتفاق مفسوخًا من تلقاء ذاته دون حاجة إلى أعذار أو اتخاذ إجراءات قضائية في أي من الحالات الآتية:<br />1. في حالة ثبوت قيامك بالإخلال بأي فقرة أو بند من بنود هذه الاتفاقية أعلاه، مع حفظ كافة حقوقنا في المطالبة بالتعويض عن الأضرار المترتبة على ذلك.<br />2. التنازل عن الحساب أو تأجيره من الباطن دون موافقتنا.<br />3. تقاعس المستخدم عن الوفاء بأية التزامات منصوص عليها في هذه الاتفاقية دون أن يتخذ إجراءات جدية لإزالة هذا الإخلال، مع الاحتفاظ بحقنا في المطالبة بالتعويضات إن كان لها محل.<br />4. عدم التمكن من توثيق أي معلومات قمت بتزويدنا بها.<br />5. إذا قررنا في أي وقت أن نشاطاتك قد تتسبب لك أو لمستخدمين آخرين في نزاعات قانونية.<br />6. توقف نشاط التطبيق والموقع، أو توقف نشاط المسئولين عن إدارة التطبيق والموقع.<br /><strong>عاشرا: القانون واجب التطبيق والمحاكم المختصة</strong><br />1. يحكم هذه الاتفاقية القوانين المعمول بها والسارية المفعول داخل الدولة المحلية.<br />2. يختص القضاء داخل الدولة المحلية &ndash;محاكم دولة فلسطين- بأي نزاع قد ينشأ عن تفسير أو تنفيذ أحكام هذه الاتفاقية.<br />3. في حال أصبح أي حكم من أحكام هذه الاتفاقية غير ساري أو غير قانوني أو غير قابل للتنفيذ، فان قانونية وقابلية تنفيذ الأحكام الأخرى لن تتأثر بأي طريقة كانت بذلك الحكم.<br /><strong>الحادي عشر: الإشعارات</strong><br />1. أي إشعارات تود إرسالها للتطبيق يجب أن يتم إرسالها عبر الخواص المحددة داخل التطبيق والموقع، ولا يعتد بأي إشعارات يتم إرسالها خارج التطبيق والموقع.<br />2. أي إشعارات يود التطبيق أو الموقع إرسالها إليك، تكون إما عن طريق إعلانها على التطبيق أو الموقع &nbsp;أو عن طريق إرسالها إليك عبر رقم الجوال أو البريد الالكتروني الذي زودتنا بهم خلال عملية التسجيل، ويفترض علمك بالإشعار بمجرد الإعلان على التطبيق، أو بمجرد مرور 24 ساعة من وقت إرسال الرسالة إليك.<br /><strong>الثاني عشر: اللغة</strong><br />1. يعتبر النص العربي لهذه الاتفاقية هو النص المعتمد لأغراض تفسير وتطبيق شروطها وأحكامها.<br />2. في حالة وجود تعارض بين النص العربي والنص المُترجم لهذه الاتفاقية، فمن المتفق عليه في هذه الحالة تطبيق ما جاء باللغة العربية.<br /><strong>الثالث عشر: أحكام خاصة&nbsp;</strong><br />1. تعتبر هذه السياسة &nbsp;جزء من السياسيات التي يتم التوقيع عليها والتي يحق لنا مطالبتكم بها.<br />2. تلتزم شركات التوصيل والعاملين فيها بالسرية والأمانة في توصيل الطلبات وسيتم اتخاذ المقتضى القانوني بحق المخالف.<br />3. يلتزم تطبيق X-Market بتوصيل الطلبات وفقا لما يُطلب منهم في أوقات العمل. المتفق عليها والمعلنة عبر التطبيق والموقع.<br />4. في حال وجود خطأ في الطلبية أو التوصيل من طرف ما نلتزم بتغييرها وإعادتها للعميل دون أجر في المرة الثانية.<br />5. &nbsp;يتم توصيل المنتجات خلال خدمة التوصيل الخاصة في تطبيق X-Market.<br />7. يتم التوصيل الى كل مدن وقرى الضفة الغربية &nbsp;القدس ومناطق 48.<br />8. مدة التوصيل: 48 ساعة.<br />9. رسوم التوصيل في الخليل: 10 شيكل اذا كان مجموع كامل طلباتك اقل من 150 شيكل&nbsp;<br />11. يكون التوصيل مجاني للطلبات التي هي بأعلى من 150 شيكل داخل مدينة الخليل<br />12. رسوم التوصيل لمناطق الضفة: 20 شيكل<br />13. رسوم التوصيل للقدس: 30 شيكل<br />14. رسوم التوصيل لمناطق 48: 75 شيكل<br />15. تنطبق اليات ورسوم التوصيل على كل المنتجات الظاهرة في الموقع.</p>', '2021-07-31 15:40:57', '2022-02-01 12:11:41'),
(8, 'تاريخنا', 'history', '<p>نبذة عن تاريخنا</p>', '2021-12-28 12:08:56', '2021-12-28 12:08:56'),
(9, 'رئيتنا', 'vision', '<p>نبذة عن رؤيتنا</p>', '2021-12-28 12:09:21', '2021-12-28 12:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `programs_images`
--

CREATE TABLE `programs_images` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `image` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs_images`
--

INSERT INTO `programs_images` (`id`, `program_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1676240109143741416762401096007280.jpg', '2023-02-12 22:15:09', '2023-02-12 22:15:09'),
(2, 1, '1676240109670709216762401092326685.png', '2023-02-12 22:15:09', '2023-02-12 22:15:09'),
(3, 1, '1676240109689369616762401099443675.jpg', '2023-02-12 22:15:09', '2023-02-12 22:15:09'),
(5, 1, '1676240713346470916762407138564649.jpg', '2023-02-12 22:25:13', '2023-02-12 22:25:13'),
(6, 3, '1676240846351217616762408468108063.jpg', '2023-02-12 22:27:26', '2023-02-12 22:27:26'),
(7, 3, '1676240846442453716762408468625256.png', '2023-02-12 22:27:26', '2023-02-12 22:27:26'),
(8, 3, '1676240846935659516762408463908052.jpg', '2023-02-12 22:27:26', '2023-02-12 22:27:26'),
(9, 3, '1676240846728623516762408464498204.jpg', '2023-02-12 22:27:26', '2023-02-12 22:27:26'),
(10, 4, '1677109586337940116771095865619944.jpg', '2023-02-22 23:46:26', '2023-02-22 23:46:26'),
(11, 4, '1677109586784436816771095862498510.jpg', '2023-02-22 23:46:26', '2023-02-22 23:46:26'),
(12, 7, '1677109999987675316771099993828570.png', '2023-02-22 23:53:19', '2023-02-22 23:53:19'),
(13, 5, '1677110124472558816771101246105409.jpg', '2023-02-22 23:55:24', '2023-02-22 23:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title_ar` text,
  `title_en` text,
  `description_ar` text,
  `description_en` text,
  `category` enum('website','app','game') DEFAULT NULL,
  `website_url` text,
  `google_play_url` text,
  `app_store_url` text,
  `image` text,
  `price` double DEFAULT NULL,
  `type` enum('project','product') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `category`, `website_url`, `google_play_url`, `app_store_url`, `image`, `price`, `type`, `created_at`, `updated_at`) VALUES
(1, 'مؤسسة الياس حنا', 'Elias Hanna foundation', '<p>يركز على مبادرات التنمية الثقافية والخيرية والاجتماعية والتعليمية التي تعود بالفائدة على المهاجرين السريان * في جميع أنحاء العالم مع تعزيز المجتمعات المحلية داخل المدن السريانية * المتبقية في سوريا</p>', '<p>Focuses on cultural, charitable, social and educational development initiatives that benefit Syriac immigrants* around the world while strengthening local communities within Syriac* cities remaining in Syria</p>', 'app', NULL, NULL, NULL, '16824491493.png', NULL, 'project', '2023-04-25 21:28:07', '2023-04-26 05:04:36'),
(2, 'Best Medical Pearls', 'Best Medical Pearls', '<p>تقدم أفضل اللآلئ الطبية لآلئ طبية مجانية وتقنيات تذكارية في جميع المجالات الطبية وتساعد جميع مقدمي الرعاية الصحية وطلاب الطب والممرضات وجميع الأشخاص المهتمين باللياقة والمعرفة الطبية</p>', '<p>Best Medical Pearls offers free medical pearls and souvenir techs in all medical fields and helps all healthcare providers, medical students, nurses and all people interested in fitness and medical knowledge</p>', 'app', NULL, 'https://play.google.com/store/apps/details?id=com.best.medical.pearls', NULL, '16824492372.png', NULL, 'project', '2023-04-25 21:28:28', '2023-04-26 05:00:37'),
(3, 'سوق فرجت', 'سوق فرجت', '<p>فرجت للوساطه الماليه والصفقات التجاريه اونلاين يمكنك الشراء والتصفح, انشاء طلبات الشراء والبيع لا توجد اى عموله على اي من الطرفين امن, فعال</p>', '<p>Farajat for financial mediation and commercial transactions online. You can buy and browse, create purchase and sale orders. There is no commission on either party. Safe, effective</p>', 'app', NULL, 'https://play.google.com/store/apps/details?id=com.aplplications.shoppingmall', NULL, '168244859426.png', NULL, 'project', '2023-04-25 21:29:41', '2023-04-26 04:49:54'),
(4, 'من بيتنا', 'from our house', '<p>تطبيق يسمح لك بطلب المنتجات وانت في المنزل<br />بضغطة زر واحدة سيصلك طلبك أمام منزبك بدون اي<br />تعب</p>', '<p>An application that allows you to order products while you are at home<br />With one click, you will receive your order in front of your home without any hassle<br />exhaustion</p>', 'app', NULL, NULL, NULL, '168244788126.png', NULL, 'project', '2023-04-25 21:30:14', '2023-04-26 04:38:01'),
(6, 'ابو عبد العزيز', 'Abu Abdul Aziz', '<p>مؤسسة سعودية رسمية تمكنك من اجراء طلبك باكثر من وسيله وباعلى جوده, واسرع وقت توصيل, حيث ان هدفنا هو ارضاء العميل وهو ما نعمل عليه في كل وقتنا</p>', '<p>An official Saudi institution that enables you to place your order in more than one way, with the highest quality, and the fastest delivery time, as our goal is to satisfy the customer, which is what we work on all our time.</p>', 'website', 'https://www.aboabdelaziz.com/', 'https://play.google.com/store/apps/details?id=com.zabaih.abuabdulaziz&hl=ar&gl=US', NULL, '168238673237.png', NULL, 'project', '2023-05-06 17:06:29', '2023-05-07 03:06:29'),
(7, 'ربوة الرياض للذبائح', 'Rabwat Riyadh for carcasses', '<p>هي عبارة عن مؤسسه سعوديه لبيع اللحوم والذبائح تقدم خدمات طلب الذبائح والأضاحي للمواطنيين والمقيمين والمطاعم والمحلات والمناسبات الكبرى</p>', '<p>It is a Saudi establishment for the sale of meat and carcasses that provides services for ordering carcasses and sacrifices for citizens and residents, restaurants, shops and major events</p>', 'website', 'https://www.rabwatalriyad.com/', 'https://play.google.com/store/apps/details?id=com.safwat.elreyad&hl=ar&gl=US', 'https://apps.apple.com/us/app/%D8%B1%D8%A8%D9%88%D8%A9-%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6-%D9%84%D9%84%D8%B0%D8%A8%D8%A7%D8%A6%D8%AD/id1484281541', '168238685638.png', NULL, 'project', '2023-04-27 01:06:36', '2023-04-27 11:06:36'),
(8, 'MASI', 'MASI', '<p>موقع لبيع اجود الملابس الصيفية والشتوية وللمناسبات بافضل اسعار افضل جودة مع توصيل لجميع المناطق داخل فلسطين</p>', '<p>A site for selling the finest summer and winter clothes for occasions at the best prices, the best quality, with delivery to all regions within<br />Palestine</p>', 'website', NULL, NULL, NULL, '168238707036.png', NULL, 'project', '2023-04-25 01:45:01', '2023-04-25 11:45:01'),
(9, 'معلن', 'muelan', '<p>هو واحد من أهم المواقع الإلكترونية المتخصصة في مجال الإعلانات والتي تمكّن المستخدمين سواء كانوا بائعين أم مشترين من بيع وشراء مختلف السلع والمنتجات خلال اقصر وقت ممكن وبأقل جهد</p>', '<p>It is one of the most important websites specialized in the field of advertising, which enables users, whether they are sellers or buyers, to buy and sell various goods and products within the shortest possible time and with minimal effort.</p>', 'website', NULL, NULL, NULL, '168238731535.png', NULL, 'project', '2023-04-27 01:06:54', '2023-04-27 11:06:54'),
(11, 'ذبائح الريان', 'Rayyan sacrifices', '<p>تطبيق يسمح لك بطلب الذبائح وتحديد نوع الذبيحه عن بعد ثم ادخال بياناتك ليتم التواصل معك مباشرة وتوصيل الطلب لباب منزلك أختار الحجم تحدى</p>', '<p>An application that allows you to order sacrifices and determine the type of sacrifice from a distance, then enter your data to communicate with you directly and deliver the request to your door<br />I choose the size<br />challenge</p>', 'app', NULL, 'https://play.google.com/store/apps/details?id=com.sheeps.elryan&hl=ar&gl=US', NULL, '168238757835.png', NULL, 'project', '2023-04-25 11:52:58', '2023-04-25 11:52:58'),
(12, 'اغنام', 'aghnam', '<p>تطبيق يسمح لك بطلب الذبائح وتحديد نوع الذبيحه عن بعد ثم ادخال بياناتك ليتم التواصل معك مباشرة وتوصيل الطلب لباب منزلك</p>', '<p>An application that allows you to order sacrifices and determine the type of sacrifice from a distance, then enter your data to communicate with you directly and deliver the request to your door</p>', 'app', NULL, NULL, NULL, '168238766135.png', NULL, 'project', '2023-04-25 11:54:21', '2023-04-25 11:54:21'),
(14, 'حجوزاتي للفنادق', 'My Booking Hotel', '<p>تطبيق يسمح لك بالبحث عن فندق مناسب رغباتك<br />وطلباتك يتيح ميزة حجز الغرف او الجناح بكل سهولة<br />ومرونة</p>', '<p>An application that allows you to search for a hotel suitable to your wishes<br />And your requests allow the advantage of booking rooms or suites with ease<br />and flexible</p>', 'app', NULL, NULL, NULL, '16825493924.png', NULL, 'project', '2023-04-26 22:49:52', '2023-04-27 08:49:52'),
(15, 'PRIMER CARE', 'PRIMER CARE', '<p>شركة مصرية انشأت بعام 2018 بهدف نشر الصحة والرفاهية وتحسين نوعية حياة الناس ، لرفع الإيجابية والاهتمام بصحة الشعوب</p>', '<p>An Egyptian company established in 2018 with the aim of spreading health and well-being and improving the quality of people\'s lives, to raise positivity and concern for people\'s health</p>', 'app', NULL, NULL, NULL, '168239055335.png', NULL, 'project', '2023-04-25 12:42:33', '2023-04-25 12:42:33'),
(16, 'تطبيق عين كدر للانتاج السينمائي', 'the actor', '<p>تطبيق يجمع الشخصيات الفنية معًا (ممثلون ، عارضون ، مخرجون ، منتجون) ويسهل عملية الاتصال الخاصة بهم ويوفر فرصة عمل للممثلين ويجعل عملية اختيار الممثل المثالي عملية سهلة للغاية للمخرجين</p>', '<p>An application that brings artistic personalities together (actors, models, directors, producers) and facilitates their communication process, provides a job opportunity for actors, and makes the process of selecting the ideal actor a very easy process for directors</p>', 'app', NULL, NULL, NULL, '16825493073.png', NULL, 'project', '2023-04-26 22:49:00', '2023-04-27 08:49:00'),
(17, 'PHARMACY', 'PHARMACY', '<p>تطبيق يتيح لك بالبحث عن الادوية بكل سهولة ويوفر مجموعة كبيرة من الادوية المحلية والمستوردة باقل جهد ووقت</p>', '<p>An application that allows you to search for medicines with ease and provides a wide range of local and imported medicines with minimal effort and time</p>', 'app', NULL, NULL, NULL, '168242238027.png', NULL, 'project', '2023-04-25 21:33:00', '2023-04-25 21:33:00'),
(18, 'ناشمي دريفر', 'NASHMECLIENT', '<p>سواء كنت ذاهبًا إلى مكان عملك أو أي مكان خاص ... سواء كنت بحاجة إلى نقل المعدات أو البضائع أو المياه وجميع خدمات النقل ، كل ما عليك فعله هو تنزيل التطبيق وسوف نتصل بك أينما كنت</p>', '<p>Whether you are going to your place of work or any private place ... Whether you need to transport equipment, goods or water and all transportation services, all you have to do is download the application and we will contact you wherever you are</p>', 'app', NULL, NULL, NULL, '168242246726.png', NULL, 'project', '2023-04-25 19:07:14', '2023-04-26 05:07:14'),
(19, 'SHACK', 'SHACK', '<p>تطبيق يسمح لك بطلب الوجبات السريعة<br />بكل سهولة</p>', '<p>An application that allows you to order fast food<br />Easily</p>', 'app', NULL, NULL, NULL, '168242254326.png', NULL, 'project', '2023-04-25 21:35:43', '2023-04-25 21:35:43'),
(21, 'BOOKING', 'BOOKING', '<p>تطبيق يسمح لك بالبحث عن فندق مناسب لرغباتك وطلباتك ويتيح ميزة حجز الغرف او الجناح بكل سهولة ومرونة</p>', '<p>An application that allows you to search for a hotel suitable for your desires and requests, and provides the advantage of booking rooms or suites with ease and flexibility</p>', 'app', NULL, NULL, NULL, '16825494762.png', NULL, 'project', '2023-04-26 22:51:16', '2023-04-27 08:51:16'),
(22, 'CLEAN', 'CLEAN', '<p>تمتع بتجربه فريده وجميله اختيار اختيار نوع الخدمة و تحديد الموعد المناسب لحضور المندوب واستلام ملابسك<br />فريق الدعم متواجد دائماً لخدمتك</p>', '<p>Enjoy a unique and beautiful experience by choosing the type of service and setting the appropriate time for the representative to attend and receive your clothes<br />The support team is always there to serve you</p>', 'app', NULL, NULL, NULL, '168242281426.png', NULL, 'project', '2023-04-25 21:40:14', '2023-04-25 21:40:14'),
(29, 'ربوة الرياض للذبائح', 'Rabwat Riyadh for carcasses', '<p>تطبيق يسمح لك بطلب الذبائح وتحديد نوع الذبيحه عن بعد ثم ادخال بياناتك ليتم التواصل معك مباشرة وتوصيل الطلب لباب منزلك</p>', '<p>An application that allows you to order sacrifices and determine the type of sacrifice from a distance, then enter your data to communicate with you directly and deliver the request to your door</p>', 'app', 'https://rabwatalriyad.com/', 'https://play.google.com/store/apps/details?id=com.safwat.elreyad', 'https://apps.apple.com/us/app/%D8%B1%D8%A8%D9%88%D8%A9-%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6-%D9%84%D9%84%D8%B0%D8%A8%D8%A7%D8%A6%D8%AD/id1484281541', '168244605726.png', NULL, 'project', '2023-04-25 22:28:49', '2023-04-26 08:28:49'),
(31, 'ارقامك', 'ارقامك', '<p>يمكنك من خلال تطبيق ارقامك البحث عن ارقام الهواتف بكل سهولة يجمع بين خاصية اظاهر اسم المتصل والبحث بالاسم عن ارقام الهواتف مجاناً دون الحاجة الى دفع رسوم</p>', '<p>By applying their numbers to all phones, you can easily collect phone fee data without having to pay a fee.</p>', 'app', NULL, NULL, NULL, '168244630126.png', NULL, 'project', '2023-04-26 04:11:41', '2023-04-26 04:11:41'),
(32, 'ستار لايف للبث', 'Star Live', '<p>تطبيق يتيح لك البث المباشر ومتابعة المذيعين من حول العالم</p>', '<p>An application that allows you to broadcast live and follow broadcasters from around the world</p>', 'app', NULL, 'https://play.google.com/store/apps/details?id=com.stars.live', NULL, '16825495111.png', NULL, 'project', '2023-04-26 22:51:51', '2023-04-27 08:51:51'),
(35, 'لبسك شيك', 'LEBSK SHIK', '<p>تطبيق يتيح لك التصفح والبحث عن المنتجات من ملابس واحذية واكسسوارات لجميع الفئات بافضل اسعار افضل جودة</p>', '<p>An application that allows you to browse and search for products such as clothes, shoes and accessories of all categories at the best prices and the best quality</p>', 'app', NULL, NULL, NULL, '168244868926.png', NULL, 'project', '2023-04-25 19:04:54', '2023-04-26 05:04:54'),
(36, 'تيشرت ميكر', 'shirt Maker', '<p>تطبيق يسمح لك بإنشاء تصاميمك الخاصة على التيشرت الخاص بك ومشاركتها مع الاخرين او طباعتها</p>', '<p>An app that allows you to create your own designs<br />Your own T-shirt and share it with others or print it</p>', 'app', NULL, NULL, NULL, '16824487588.png', NULL, 'project', '2023-05-06 17:05:00', '2023-05-07 03:05:00'),
(37, 'PATCHWORK', 'PATCHWORK', '<p>هي لعبة لوحية مكونة من لاعبين تم إنشاؤها بواسطة Uwe Rosenberg. صدر في عام 2014</p>', '<p>is a two-player board game created by Uwe Rosenberg. Released in 2014</p>', 'game', 'https://drive.google.com/drive/folders/1RswthQzv7RwgiR5jzWCA1k0pMRodo-VR?usp=share_link', NULL, NULL, '168242262126.png', NULL, 'project', '2023-04-25 22:38:05', '2023-04-26 08:38:05'),
(38, 'عين كدر للانتاج السينمائي', 'NCADRE', '<p>احدي شركات مجموعه عين للانتاج الفني والتوزيع السينمائي تأسست سنة ۲۰١٣ مارست العمل في مجال الاستشارات التسويقية و التدريب مع الكثير من الممثلين و المخرجين و صناع المحتوى .</p>', '<p>One of the companies of Ain Group for Artistic Production and Film Distribution, established in 2013. It worked in the field of marketing consulting and training with many actors, directors and content makers.</p>', 'website', 'https://ncadre.com/', NULL, NULL, '168238743535.png', NULL, 'project', '2023-04-25 22:35:22', '2023-04-26 05:06:19'),
(39, 'مارشنت بيوتي', 'Merchant Beauty', '<p>تطبيق لشراء و تجارة منتجات التجميل</p>', '<p>تطبيق لشراء و تجارة منتجات التجميل</p>', 'app', NULL, NULL, NULL, '168255000611.png', NULL, 'project', '2023-04-27 01:03:43', '2023-04-27 09:00:06'),
(40, 'كايلي', 'KYLE', '<p>تطبيق ممتاز للتعارف على اشخاص جدد والتواصل مع الناس</p>', '<p>An excellent application for meeting new people and communicating with people</p>', 'app', 'https://codecanyon.net/item/kyle-premium-random-video-dating-and-matching/28022697#', NULL, NULL, '16824488417.png', NULL, 'project', '2023-04-25 22:35:29', '2023-04-26 08:22:50'),
(41, 'Dr Mohamed Ayman', 'د.محمد ايمن', '<p>لمشاهدة الدورات وقراءة الكتب التربوية وحفظ الملاحظات ومشاركة النتائج مع والديك وحل الواجبات</p>', '<p>To watch courses and read educational books</p>', 'app', 'https://mohammed-ayman.com/', 'https://play.google.com/store/apps/details?id=com.codeProeDrMohamedAyman.codeProeDrMohamedAyman', 'https://apps.apple.com/us/app/dr-mohamed-ayman/id1575781604', '16824489187.png', NULL, 'project', '2023-04-25 22:35:31', '2023-04-26 08:22:31'),
(42, 'مارشنت فاكهة', 'Merchant Fruits', '<p>تطبيق لشراء و تجارة الفاكهة و الخضروات</p>', '<p>تطبيق لشراء و تجارة الفاكهة و الخضروات</p>', 'app', 'https://drive.google.com/drive/folders/1FTHEatwnmEmW_kztZvQo5bs8J-NKw206?usp=share_link', NULL, NULL, '16825501779.png', NULL, 'project', '2023-04-26 23:37:06', '2023-04-27 09:37:06'),
(43, 'كيو كلين', 'QClean', NULL, '<p>تطبيق يساعدك علي خدمات التنظيف باريحية سواء تنظيف الملابس او المنازل او السيارات</p>', 'app', 'https://drive.google.com/drive/folders/1Tkc3C1o6camWC-8Ld-pnsL5EX_gCgXyp?usp=share_link', NULL, NULL, '16825498777.png', NULL, 'project', '2023-04-26 23:36:25', '2023-04-27 09:36:25'),
(46, 'مجمع قمر العروبة الطبي', 'Qamar Eraroba Platform', '<p>منصة حجر اطباء عن بعد</p>', '<p>منصة حجر اطباء عن بعد</p>', 'app', 'https://drive.google.com/drive/folders/1j8VCu2xIm5sgrE6JkAG3CM8HnAMuASii?usp=share_link', NULL, NULL, '168255077114.png', NULL, 'project', '2023-04-26 23:37:37', '2023-04-27 09:37:37'),
(47, 'فور دايركشن جروب', 'FOUR DIRECTION GROUP', '<p>مشروع مخصص لشركه ٣صثق<br /><br /></p>', '<p>مشروع مخصص لشركه ٣صثق<br /><br /></p>', 'website', 'https://drive.google.com/drive/folders/1LYhAVzZJVkZpuKjAwB_3laN_GOSPjJ5F?usp=share_link', NULL, NULL, '168238315839.png', NULL, 'project', '2023-04-27 01:03:55', '2023-04-26 08:39:01'),
(48, 'مارشنت الكترونيات', 'Merchant Electronics', '<p>تطبيق لشراء و تجارة المنتجات الالكترونية</p>', '<p>تطبيق لشراء و تجارة المنتجات الالكترونية</p>', 'app', NULL, NULL, NULL, '168255008510.png', NULL, 'project', '2023-04-26 23:06:05', '2023-04-27 09:06:05'),
(49, 'سوق نشمي', 'suq nashmiun', '<p>تطبيق يسمح بنشر الاعلانات وسهولة وصولها الي ارجاء الوطن العربي و يتيح لك سوق نشمي اكثر من ٥٠ تصنيفا لتختار بسهوله ماترغب في بيعه او شراؤه</p>', '<p>An application that allows ads to be published and easy to reach throughout the Arab world, and Nashmi Market allows you more than 50 categories to choose easily what you want to buy or sell</p>', 'website', 'https://nashmisouq.com/', 'https://play.google.com/store/apps/details?id=nashmi.souq.store', 'https://apps.apple.com/us/app/%D9%86%D8%B4%D9%85%D9%8A-%D8%B3%D9%88%D9%82-nashmi-souq/id1522217926', '168242290526.png', NULL, 'project', '2023-05-06 16:55:03', '2023-05-07 02:55:03'),
(50, 'بي اي بي', 'PIB', '<p>تطبيق لوساطة الخدمات</p>', '<p>تطبيق لوساطة الخدمات</p>', 'app', 'https://drive.google.com/drive/folders/1Ejbm2uuaJraElVypV-tORo2Ci_yEQ8MF?usp=share_link', NULL, NULL, '16825503318.png', NULL, 'project', '2023-04-26 23:33:54', '2023-04-27 09:33:54'),
(51, 'صالوني', 'Salony', '<p>تطبيق صالوني لخدمات التجميل</p>', '<p>تطبيق صالوني لخدمات التجميل</p>', 'app', 'https://linkfly.to/Salony', 'https://play.google.com/store/apps/details?id=sa.aait.asp.customer.salony', 'https://apps.apple.com/sa/app/%25D8%25B5%25D8%25A7%25D9%2584%25D9%2588%25D9%2586%25D9%258A-%25D8%25B9%25D9%2585%25D9%258A%25D9%2584/id1587666301?l=ar', '168255046915.png', NULL, 'project', '2023-04-26 23:24:48', '2023-04-27 09:24:48'),
(52, 'متحف العائلة المالكة', 'ُThe Royal Family', '<p>تعرف علي العائلة المالكة السعودية عبر المتحف الذكي الغني بالصور و المعلومات</p>', '<p>تعرف علي العائلة المالكة السعودية عبر المتحف الذكي الغني بالصور و المعلومات</p>', 'app', NULL, 'https://play.google.com/store/apps/details?id=com.srsv.gallery', 'https://apps.apple.com/us/app/srsv-the-royal-family/id1671250006', '16825505806.png', NULL, 'project', '2023-04-26 23:29:06', '2023-04-27 09:29:06'),
(53, 'مؤسسة ابصر الطبية', 'ISight Platform', '<p>مؤسسة ابصر الطبية لحجز المواعيد مع طبيبك في مجال العيون</p>', '<p>مؤسسة ابصر الطبية لحجز المواعيد مع طبيبك في مجال العيون</p>', 'app', 'http://isight.sa/', 'https://drive.google.com/drive/folders/1EoMKzf1Xnfx6VjvBhBoHc6ClegZ5wFJw?usp=share_link', 'https://drive.google.com/drive/folders/1EoMKzf1Xnfx6VjvBhBoHc6ClegZ5wFJw?usp=share_link', '168255070113.png', NULL, 'project', '2023-04-26 23:28:07', '2023-04-27 09:28:07'),
(54, 'سعودي كلين', 'saeudi klin', '<p>تمتع بتجربه فريده وجميله ومريحة قم باختيار نوع الخدمة المطلوبة و تحديد الموعد المناسب لحضور المندوب واستلام ملابسك<br />فريق الدعم متواجد دائماً لخدمتك</p>', '<p>Enjoy a unique, beautiful and comfortable experience. Choose the type of service required and set the appropriate time for the representative to attend and receive your clothes<br />The support team is always there to serve you</p>', 'app', 'https://saudiclean.com.sa/', 'https://play.google.com/store/apps/details?id=com.saudiclean.app.saudi_clean', 'https://apps.apple.com/sa/app/saudi-clean-%D8%B3%D8%B9%D9%88%D8%AF%D9%8A-%D9%83%D9%84%D9%8A%D9%86/id1438279137', '168242312926.png', NULL, 'project', '2023-04-26 23:16:29', '2023-04-26 08:24:06'),
(55, 'مصمم الابحاث', 'Reseach Design Studio', '<p>يساعدك علي تصميم و كتابة بحثك بطريقة علمية و اكاديمية</p>', '<p>يساعدك علي تصميم و كتابة بحثك بطريقة علمية و اكاديمية</p>', 'website', 'https://research-design-studio.com/', 'https://play.google.com/store/apps/details?id=research.design.studio&hl=ar&gl=US', 'https://apps.apple.com/sa/app/research-design-studio/id1667099007', '16825508685.png', NULL, 'project', '2023-05-06 16:55:09', '2023-05-07 02:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `page_url` mediumtext,
  `seo_title_ar` mediumtext,
  `seo_title_en` mediumtext,
  `seo_description_ar` mediumtext,
  `seo_description_en` mediumtext,
  `seo_keywords_ar` mediumtext,
  `seo_keywords_en` mediumtext,
  `seo_image` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_url`, `seo_title_ar`, `seo_title_en`, `seo_description_ar`, `seo_description_en`, `seo_keywords_ar`, `seo_keywords_en`, `seo_image`, `created_at`, `updated_at`) VALUES
(1, '/', 'تحالف', 'Tahaluf', 'وصف السيو', 'seo description', 'كلمة مفتاحية 1, كلمة مفتاحية 2', 'keyword1, keyword2', '1679340118316127716793401188546155.jpeg', '2023-03-27 21:53:59', '2023-03-28 05:53:59'),
(2, '/about', 'عن تحالف', 'about tahaluf4', 'من نحن تحالف', 'about us tahaluf', 'about,us', 'من,نحن', '1680800890419737816808008906664500.png', '2023-04-06 17:08:18', '2023-04-06 17:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` text,
  `title_ar` text,
  `title_en` text,
  `content_ar` text,
  `content_en` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title_ar`, `title_en`, `content_ar`, `content_en`, `created_at`, `updated_at`) VALUES
(1, '1681623883121931316816238835309788.svg', 'برمجة التطبيقات', 'Applications Development', 'تصميم جذاب , يدعم جميع الاجهزة الاندرويد و الايفون بكل الاصدارات ، حق تملك كامل ل السورس كود, دعم ٢٤ ساعة', 'An attractive design, supports all Android and iPhone devices in all versions, full ownership of the source code, 24-hour support', '2023-04-25 02:59:07', '2023-04-25 12:59:07'),
(2, '1681623967893769016816239679201118.svg', 'التسويق الالكترونى', 'Digital Marketing', 'تصدر محركات البحث , تسويق على المواقع الاجتماعبة , تسويق\r\nعلى جوجل , إعلانات لدى المشاهير', 'Search engines, marketing on social sites, marketing\r\nOn Google , ads with celebrities', '2023-04-16 06:46:07', '2023-04-16 06:46:07'),
(3, '1681624046457242416816240467714131.svg', 'إدارة الصفحات', 'Page management', 'صفحات الفيسبوك, ادارة الانستقرام , ادارة تويتر , صناعة بوتات تلجرام , الصفحات الانتخابية والمزيد', 'Facebook pages\r\nInstagram management\r\nTwitter management\r\nTelegram bots\r\n, election pages and more', '2023-04-24 22:40:27', '2023-04-25 08:40:27'),
(4, '1682376633504852116823766336872602.png', 'تصميم الجرافيك', 'Graphic Design', 'غلافات صفحات الفيسبوك, قنوات اليوتيوب, تصميم اعلانات لمنتجك, دعم تصاميم ثلاثية الابعاد, متاح جميع الاحجام', 'Facebook page covers, YouTube channels, design ads for your product, support 3D designs, all sizes are available', '2023-04-24 22:50:33', '2023-04-25 08:50:33'),
(5, '1682376687291732516823766875476771.png', 'مواقع الويب', 'Web Development', 'تصميم مرن وجذاب, يدعم جميع الشاشات ، حق تملك كامل ل السورس كود, دعم ٢٤ ساعة ، كود قوي و مرتب', 'Flexible and attractive design, supports all screens, full ownership of the source code, 24-hour support, strong and clean code', '2023-04-25 02:56:34', '2023-04-25 12:56:34'),
(6, '1682391247960049116823912472982261.png', 'الاستضافة', 'Hosting', 'استضافة سريع و قوية لمشاريع و تطبيقاتك ، مع ذعم ٢٤ ساعة و رد فوري ، تكلفة قليلة و ادارة مناسبة لشروط دول الخليج', 'Fast and powerful hosting for your projects and applications, with 24-hour support and immediate response, low cost and management suitable for the conditions of the Gulf countries', '2023-04-25 12:54:07', '2023-04-25 12:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(46, 'contact_phone', '+971501927944', '2023-02-12 22:55:42', '2023-05-05 20:20:41'),
(47, 'contact_email', 'contact@techgo-groub.com', '2023-02-12 22:55:58', '2023-04-25 11:15:45'),
(50, 'contact_facebook', 'https://www.facebook.com/tech.go.group', '2023-02-13 21:18:34', '2023-04-25 11:14:15'),
(51, 'contact_linkedin', 'https://www.linkedin.com/company/tech-go', '2023-02-13 21:18:47', '2023-04-25 11:15:32'),
(52, 'contact_twitter', 'https://twitter.com/TechGo12', '2023-02-13 21:19:04', '2023-04-25 11:14:26'),
(53, 'contact_youtube', 'youtube.com/@tech-go', '2023-02-13 21:19:14', '2023-04-25 11:22:19'),
(55, 'address_ar', 'جلفار تاور ، النخيل ، راس الخيمة ، الإمارات العربية المتحدة', '2023-04-16 08:46:33', '2023-04-25 11:24:59'),
(56, 'address_en', 'Julphar Tower, Al Nakheel, Ras Al Khaimah, United Arab Emirates', '2023-04-16 08:46:48', '2023-04-25 11:25:30'),
(57, 'record_number', '699-366-156', '2023-04-16 08:47:12', '2023-04-16 08:47:12'),
(58, 'contact_instagram', 'https://www.instagram.com/tech.go.group/', '2023-04-25 06:26:57', '2023-04-25 11:14:06'),
(59, 'darkmode_enabled', 'true', '2023-04-25 09:13:43', '2023-04-25 10:01:13'),
(60, 'scroll_top_enabled', 'false', '2023-04-25 09:14:09', '2023-04-26 03:33:42'),
(61, 'services_wh_message_ar', 'السلام عليكم اريد طلب خدمة', '2023-04-25 09:36:58', '2023-04-25 09:36:58'),
(62, 'services_wh_message_en', 'Welcome I want to order a service', '2023-04-25 09:37:21', '2023-04-25 09:37:21'),
(63, 'projects_wh_message_ar', 'السلام عليكم و رحمة الله ، احتاج تنفيذ مشروع مشابه لهذا المشروع', '2023-04-25 09:37:49', '2023-04-25 09:37:49'),
(64, 'projects_wh_message_en', 'welcome I want to request a project like this', '2023-04-25 09:38:06', '2023-04-25 09:38:06'),
(65, 'contact_whatsapp', '971501927944', '2023-04-25 20:25:51', '2023-05-05 20:20:57'),
(66, 'whatsapp_main_text_ar', 'مرحبا انا مهتم بطلب إستشارة تقنية', '2023-04-27 21:23:33', '2023-04-27 21:24:46'),
(67, 'whatsapp_main_text_en', 'Hello, I am interested in requesting technical advice', '2023-04-27 21:23:56', '2023-04-27 21:24:54'),
(68, 'home_teams', 'true', '2023-05-01 02:43:18', '2023-05-01 02:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title_ar` text,
  `title_en` text,
  `description_ar` text,
  `description_en` text,
  `image` text,
  `link` text,
  `type` enum('tablet','mobile') NOT NULL DEFAULT 'tablet',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `link`, `type`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, NULL, NULL, '1682400230842753716824002304777821.png', NULL, 'tablet', '2023-04-25 15:23:50', '2023-05-11 02:15:23'),
(11, NULL, NULL, NULL, NULL, '1683396733903153416833967336140440', NULL, 'tablet', '2023-05-07 03:15:19', '2023-05-07 04:12:13'),
(12, NULL, NULL, NULL, NULL, '1683396749960297716833967497860661', NULL, 'tablet', '2023-05-07 03:15:50', '2023-05-07 04:12:29'),
(13, NULL, NULL, NULL, NULL, '1683396759877308716833967597111061', NULL, 'tablet', '2023-05-07 03:16:25', '2023-05-07 04:12:39'),
(14, NULL, NULL, NULL, NULL, '1683396770737884716833967703870822', NULL, 'tablet', '2023-05-07 03:17:07', '2023-05-07 04:12:50'),
(15, NULL, NULL, NULL, NULL, '1682594099510868916825940996930597.png', NULL, 'mobile', '2023-04-27 21:14:59', '2023-04-27 21:14:59'),
(17, NULL, NULL, NULL, NULL, '1683396998390374916833969981871474.png', NULL, 'mobile', '2023-05-07 04:16:38', '2023-05-07 04:16:38'),
(18, NULL, NULL, NULL, NULL, '1683397046557307516833970461634049.png', NULL, 'mobile', '2023-05-07 04:17:26', '2023-05-07 04:21:17'),
(19, NULL, NULL, NULL, NULL, '1683398055351331616833980559359315.png', NULL, 'mobile', '2023-05-07 04:34:15', '2023-05-07 04:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `title_ar` text,
  `title_en` text,
  `description_ar` text,
  `description_en` text,
  `icon` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'الاتصال بك', 'Contact you', 'إخبرنا ب أى شئ تريد تصميمه', 'Tell us anything you want to design', '1681625206contact.svg', '2023-04-16 07:06:46', '2023-04-16 07:13:52'),
(2, 'الخطة', 'the plan', 'سوف نعطيك خطة بناء متكاملة', 'We will give you a complete building plan', '1681625678plan.svg', '2023-04-16 07:14:38', '2023-04-16 07:14:38'),
(3, 'التصميم', 'the design', 'بمجرد الاتفاق سنعطيك تصاميم الواجهات', 'Once agreed, we will give you the facade designs', '1681625746design.svg', '2023-04-16 07:15:46', '2023-04-16 07:15:46'),
(4, 'البرمجة', 'programming', 'سوف نقوم بكتابة الكود وربط قواعد البيانات', 'We will write the code and connect the databases', '1681625793program.svg', '2023-04-16 07:16:33', '2023-04-16 07:16:33'),
(5, 'الفحص النهائى', 'Final examination', 'سوف نقوم بفحص الكود وتأمينه من الثغرات', 'We will scan the code and secure it from Bugs & vulnerabilities', '1681625841check.svg', '2023-04-25 17:30:42', '2023-04-26 03:30:42'),
(6, 'النشر', 'publish', 'سوف نقوم برفع التطبيق او الموقع ونشره لتبدآ بجني الارباح', 'We will upload the application or website and publish it to start making profits', '1681625872publish.svg', '2023-04-16 07:17:52', '2023-04-16 07:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name_ar` text CHARACTER SET utf8,
  `name_en` text CHARACTER SET utf8,
  `description_ar` text CHARACTER SET utf8,
  `description_en` text CHARACTER SET utf8,
  `location_ar` text CHARACTER SET utf8,
  `location_en` text CHARACTER SET utf8,
  `image` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name_ar`, `name_en`, `description_ar`, `description_en`, `location_ar`, `location_en`, `image`, `link`, `created_at`, `updated_at`) VALUES
(5, 'سوق ناشمي', 'Nashmi Souq', 'يمكنك من البحث في أكثر من 47260 إعلان لموزعين عبر الاردن و يعتبر من افضل منصات الوساطة الإعلانية في عمان', 'You can search in more than 47,260 advertisements for distributors across Jordan, and it is considered one of the best advertising mediation platforms in Amman', 'الاردن , عمان', 'Jordan, Amman', 'FANj1kw4qI6FEc9UAgBL87KMkIJeAsqLouhdEsHl.svg', 'https://nashmisouq.com/', '2023-04-16 08:41:59', '2023-04-26 08:12:16'),
(6, 'ربوة الرياض', 'Rabwat Al-Riyadh', 'التطبيق رقم #١ في طلب الذبائح في الرياض حيث يعتبر من اول التطبيقات التي بدآت منذ ٢٠١٧ و بالتعاون معنا اصبح الآن من اكثز التطبيقات شهرة في مجال طلب الذبائح', 'It\'s #1 in requesting carcasses in Riyadh, as it is considered one of the first applications that started since 2017, and in cooperation with us, it has now become one of the most famous applications in the field of requesting carcasses', 'السعودية, الرياض', 'Riyadh, Saudi Arabia', 'B4cGhL8fWymH8AyLFd2ffTKnOdKrbQTHhoRATTlx.png', 'https://rabwatalriyad.com/', '2023-04-26 08:10:34', '2023-04-26 08:10:34'),
(7, 'Best Medical Pearls', 'Best Medical Pearls', 'تطبيق خاص بجامعة Dalhousie في كندا حيث يساعد طلاب كلية الطب علي متابعة احدث المعلومات و التنبيهات', 'An application for Dalhousie University in Canada, where it helps medical students to follow up on the latest information and alerts', 'كندا ، تورونتو', 'Canada, Toronto', 'Asjk1eAsJQJ667eoTd6oVhIOlHoi4gCk6cxUUlfn.webp', 'https://play.google.com/store/apps/details?id=com.best.medical.pearls', '2023-04-26 08:14:11', '2023-04-26 08:14:11'),
(8, 'سعودي كلين', 'Saudi Clean', 'من اشهر تطبيقات خدمات التنظيف في السعودية حيث يقدم خدمات التنظيف و التوصيل للمنازل ويعد #١ من حيث عدد التحميلات و قيمة الخدمات التي يقدمها حسب مقال قدمته مجلة العربي', 'It is one of the most popular cleaning services applications in Saudi Arabia, as it provides cleaning and home delivery services and is #1 in terms of the number of downloads and the value of the services it provides, according to an article presented by Al-Araby magazine.', 'السعودية ، الرياض', 'Riyadh, Saudi Arabia', 'Ee89XpvNxC44yPvM6jd2PMMJqHvnPT0xB5MDN31P.png', 'https://saudiclean.com.sa/', '2023-04-26 08:17:22', '2023-04-26 08:17:22'),
(9, 'كايلي برو', 'Kyle Pro', 'منصة متكاملة للتواصل الاجتماعي وتعد الاكثر مبيعا و نموا علي كودكانيون ، حصلت المنصة علي تقيم الاكثر مبيعا لمده ٣ اشهر علي التوالي و لا زالت تحقق نموا حتي الآن', 'An integrated platform for social communication and is the best-selling and growing on CodeCanyon. The platform has achieved the best-selling rating for 3 months in a row and is still growing so far.', 'منصة عالمية', 'International', 'hPVb0fsR8kS1YM9H37aXS9tNFUgyKMBqAGilLHCy.png', 'https://codecanyon.net/item/kyle-premium-random-video-dating-and-matching/28022697#', '2023-04-26 08:19:13', '2023-04-26 08:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','none') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `birthdate` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product.png',
  `OS` enum('none','android','IOS','web') COLLATE utf8mb4_unicode_ci DEFAULT 'none',
  `active` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `visit` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `trust` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `mac_address` int(255) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `store_id` int(11) NOT NULL DEFAULT '0',
  `blood_type` enum('A+','A-','B+','B-','O+','O-','AB+','AB-','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `id_number` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `expertise` int(11) DEFAULT '0',
  `user_type` enum('user','dr','admin','sub_admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `expired_date` date DEFAULT NULL,
  `permission` enum('admin','add_data','orders','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `firebase_token` text COLLATE utf8mb4_unicode_ci,
  `user_shipping` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `whatsapp`, `gender`, `birthdate`, `image`, `OS`, `active`, `visit`, `trust`, `mac_address`, `ip`, `sms`, `code`, `store_id`, `blood_type`, `city_id`, `id_number`, `package_id`, `email_verified_at`, `password`, `admin`, `expertise`, `user_type`, `expired_date`, `permission`, `firebase_token`, `user_shipping`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'مايكل امجد', 'contact@techgo-groub.com', '00972595761288', NULL, 'male', '2022-01-10', '1637761465190710716377614657085384.jpg', 'android', 'true', 'false', 'false', NULL, NULL, NULL, '0', 1, 'other', 0, '123', 1, NULL, '$2y$10$rGHr/zxJ0NIaH3Zd9jq42O.CO4IplErhCnOBtvewlzo4PM.VdCdgu', 1, 0, 'user', NULL, 'admin', 'toekn', 'no', NULL, '2021-07-26 18:19:12', '2023-05-05 09:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci,
  `title_en` text COLLATE utf8mb4_unicode_ci,
  `source` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `program_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_categories`
--
ALTER TABLE `employees_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_answers`
--
ALTER TABLE `faq_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_value`
--
ALTER TABLE `key_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_requests`
--
ALTER TABLE `medical_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs_images`
--
ALTER TABLE `programs_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees_categories`
--
ALTER TABLE `employees_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq_answers`
--
ALTER TABLE `faq_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `key_value`
--
ALTER TABLE `key_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_requests`
--
ALTER TABLE `medical_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs_images`
--
ALTER TABLE `programs_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
