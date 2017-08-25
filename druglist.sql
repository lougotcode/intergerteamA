-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 09:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `druglist`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `disease` varchar(500) NOT NULL,
  `dosage` varchar(500) NOT NULL,
  `adverse_effect` varchar(500) NOT NULL,
  `manufacturer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `name`, `disease`, `dosage`, `adverse_effect`, `manufacturer`) VALUES
(1, 'Bupropion', 'Peripheral Vascular Disease, Depression, Acute Smoking Addiction.', '1 tablet 3 or 4 times daily', 'nervousness, constipation, trouble sleeping, dry mouth, headache, nausea, vomiting and shakiness(tremor)', 'GlaxoSmithKline LLC - (Wellbutrin)'),
(2, 'Dibromopropamidine', 'Skin infections, Burns, Cuts, Eye Infections, Minor Injuries, Scalds.', 'Oral application - One or two drops 3 times daily on affected area.', 'Blurring of vision, Rash, itching or redness around the treated area, Rashes or itching or redness on the fingers and hands.', 'Novartis pharmaceuticals'),
(6, 'Azithromycin\r\n', 'Disseminated Mycobacterium avium complex (MAC) disease and other opportunistic bacteria infections.\r\n', 'For the single dose (1 g): The entire contents of the packet should be mixed thoroughly with two ounces (approximately 60 mL) of water. Drink the entire contents immediately; add an additional two ounces of water, mix, and drink to ensure complete consumption of dosage. The single dose packet should not be used to administer doses other than 1000 mg of azithromycin.\r\n', '\"Cardiovascular: Palpitations and chest pain.\r\nGastrointestinal: Dyspepsia, flatulence, vomiting, melena, and cholestatic jaundice.\r\nGenitourinary: Monilia, vaginitis, and nephritis.\r\nNervous System: Dizziness, headache, vertigo, and somnolence.\r\nFatigue.\r\nAllergic: Rash, photosensitivity, and angioedema.\"\r\n', 'GREENSTONE® BRAND.\r\n'),
(7, 'Benzocaine\r\n', 'Relieves pain and itching in the ear caused by ear infections and topical use to reduce pain or discomfort caused by minor skin irritations, sore throat, sunburn, teething pain, vaginal or rectal irritation, ingrown toenails, hemorrhoids, etc.\r\n', 'Topical dosage: Apply on affected area as drops i.e. 54 mg-14 mg/mL; 55 mg-14 mg / mL. For other specific usages, try to see a physician.\r\n', 'Not all adverse may be reported. But in the most severe allergic reactions (rash; hives; itching; difficulty breathing; tightness in the chest; swelling of the mouth, face, lips, or tongue); burning, stinging, tenderness, redness, swelling, or irritation not present when you began using benzocaine drops; ear discharge have been reported.\r\n', 'Dynarex Corporation\r\n'),
(8, 'Cephalexin\r\n', 'For treatment of infections caused by bacteria, including upper respiratory infections, ear infections, skin infections, and urinary tract infections.\r\n', '\"Dosage applies for Otis media -> 250 to 333 mg orally every 6 hours OR 500 mg orally every 12 hours\r\n-Maximum dose: 4 g per day\r\n-Duration of therapy: 7 to 14 days\"\r\n', 'More common: Diarrhoea Rare: Abdominal or stomach pain blistering, peeling, or loosening of the skin chills, clay-colored stools, cough, dark urine, diarrhoea dizziness, fever general tiredness and weakness headache.\r\n', 'Cerner Multum, Inc. UK.\r\n'),
(9, 'Dicloxacillin\r\n', 'For the treatment of many different types of infections caused by bacteria such as bronchitis, pneumonia, or staphylococcal (also called \"staph\") infections. Other uses may also be indicated.\r\n', '250 to 500 mg orally every 6 hours for 10 days, depending on the nature and severity of the infection for treatment of Bronchitis.\r\n', 'GI effects (nausea, vomiting, epigastric distress, loose stools, diarrhoea, flatulence); hypersensitivity reactions.\r\n', 'Apothecon Inc, NJ.\r\n\r\n\r\n'),
(10, 'Furosemide\r\n', 'To treat fluid retention (edema) in people with congestive heart failure, liver disease, or a kidney disorder such as nephrotic syndrome.\r\n', 'Initial oral dose: 20 to 80 mg orally once; may repeat with the same dose or increase by 20 or 40 mg no sooner than 6 to 8 hours after the previous dose until the desired diuretic effect has been obtained.\r\n', 'Hepatic encephalopathy in patients with hepatocellular insufficiency•pancreatitis•jaundice (intrahepatic cholestatic jaundice)•increased liver enzymes•anorexia•oral and gastric irritation •cramping •diarrhea• constipation\r\n', 'Merck & Co, Inc, PA.\r\n\r\n'),
(11, 'Lisinopril\r\n', 'Lisinopril is used to treat high blood pressure (hypertension) in adults and children who are at least 6 years old.\r\n', '\"10 mg orally once a day; 5 mg orally once a day.\r\nMaintenance dose: 20 to 40 mg orally once a day\r\nMaximum dose: 80 mg orally once a day\"\r\n', 'Blurred visioncloudy urineconfusiondecrease in urine output or decrease in urine-concentrating abilitydizziness, faintness, or lightheadedness when getting up suddenly from a lying or sitting position sweating unusual, tiredness or weakness.\r\n', 'Merck & Co, Inc, PA.\r\n'),
(12, 'Metformin\r\n', 'Diabetes medication that helps control blood sugar levels. Also used to improve blood sugar control in people with type 2 diabetes.\r\n', '\"Initial dose: 500 mg orally twice a day or 850 mg orally once a day.\r\nDose titration: Increase in 500 mg weekly increments or 850 mg every 2 weeks as tolerated\r\nMaintenance dose: 2000 mg daily in divided doses\r\nMaximum dose: 2550 mg/day\"\r\n', 'Lactic acidosis, diarrhoea, nausea, nausea and vomiting, vomiting, and flatulence. Others may include: asthenia, and decreased vitamin b12 serum concentrate.\r\n', 'Ranbaxy Pharmaceuticals.\r\n'),
(13, 'Notriptyline\r\n', 'A tricyclic antidepressant. It which affects chemicals in the brain that may be unbalanced in people with depression. It is used to treat symptoms of depression.\r\n', '\"25 mg orally three or four times per day\r\nMaximum dose: 150 mg orally per day.\"\r\n', 'Abdominal or stomach pain agitation, blurred vision,burning, crawling, itching, numbness, prickling, \"pins and needles\", or tingling feelings,chest pain or discomfort, clay-colored stools, cold, sweats, confusion about identity, place, and time, false beliefs that cannot be changed by facts,continuing ringing or buzzing or other unexplained noise in the ears decreased urination, depression, difficulty in passing urine (dribbling), difficulty with speaking.\r\n', 'Sandoz Pharmaceuticals Corporation, NJ.\r\n'),
(14, 'Phendimetrazine\r\n', 'It is an \"anorectic\" or \"anorexigenic\" drug that stimulates the central nervous system (nerves and brain), which increases your heart rate and blood pressure and decreases your appetite.\r\n', 'Extended dosage release in obese patients -105 mg orally once a day, 30 to 60 minutes before morning meal.\r\n', 'some rare adverse effects may include: Seeing, hearing, or feeling things that are not there, severe mental changes. Anxiety, burning while urinating, chest pain or discomfort, decreased ability to exercise, difficult or painful urination, dizziness,dry mouth, fainting etc.\r\n', 'Boehringer-Ingelheim.\r\n'),
(15, 'Simvastatin\r\n', 'A group of drugs called \"statins\" which reduces levels of \"bad\" cholesterol (low-density lipoprotein, or LDL) and triglycerides in the blood, while increasing levels of \"good\" cholesterol (high-density lipoprotein, or HDL).\r\n', '\"Normal dosage range: 5 to 40 mg orally once a day in the evening. But risk patients\r\nwith CHD or at high risk of CHD can take 10 to 20 mg orally once a day in the evening started simultaneously with diet and exercise.\"\r\n', 'More common effects are: Dizziness,fainting, fast or irregular heart beat while less common effects include: Bladder pain, bloody or cloudy urine, blurred vision,body aches or pain, chills, cough etc\r\n', 'imute inc'),
(16, 'paracetamol', 'headache,cold', '2 500mg daily', 'drowsiness', 'Emzor inc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
