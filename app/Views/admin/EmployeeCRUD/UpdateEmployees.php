<?php include(APPPATH.'Views\admin\sidebar.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
    <style>
        .error {
            width: 100%;
            margin-top: .25rem;
            font-size: .875em;
            color: #dc3545;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="main-panel" id="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end" id="navigation"></div>
            </div>
        </nav>
        <!--    <div class="container form position-relative ">-->

        <div class="panel-header panel-header-sm"></div>
        <div class="content">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form id="self_registration" class="row g-2" method="post" action="/register">
                            <div class="row">
                                <h1 class="mt-4 text-dark fs-3 text-center">Edit Employee Data</h1>
                                <div class="col-3">
                                    <label for="id" class=" font text-dark mt-2 form-label">ID/Passport number</label>
                                    <input type="text" class=" font form-control" name="id" disabled value="<?= $employee['id/passport'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="title" class="font text-dark mt-2 form-label">Courtesy Title</label>
                                    <select name="title" class="font form-select form-control">
                                        <option selected disabled><?= $employee['title'] ?></option>
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Ms.</option>
                                        <option>Dr.</option>
                                        <option>Miss</option>
                                        <option>Sir</option>
                                        <option>Madam</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="fname" class=" font text-dark mt-2 form-label">First Name</label>
                                    <input type="text" class=" font form-control" name="fname" disabled value="<?= $employee['fname'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="mname" class=" font text-dark mt-2 form-label">Middle Name</label>
                                    <input type="text" class=" font form-control" name="mname" disabled value="<?= $employee['mname'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="lname" class="font text-dark mt-2 form-label">Last Name</label>
                                    <input type="text" class="font form-control" name="lname" disabled value="<?= $employee['lname'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="gender" class="font text-dark mt-2 form-label">Gender</label>
                                    <select name="gender" class="font form-select form-control" disabled>
                                        <option selected disabled> <?= $employee['gender'] ?> </option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="dob" class="font text-dark mt-2 form-label">Date of Birth</label>
                                    <input type="date" class="font form-control" name="dob" disabled value="<?= $employee['dob'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="postaddress" class="font text-dark mt-2 form-label">Postal Address</label>
                                    <input type="text" class="font form-control" name="postaddress" value="<?= $employee['postaddress'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="pcode" class="font text-dark mt-2 form-label">Post Code</label>
                                    <select class="font form-select form-control" name="pcode">
                                        <option selected disabled> <?= $employee['postcode'] ?> </option>
                                        <option>AHERO - 40101</option>
                                        <option>AINABKOI - 30101</option>
                                        <option>AKALA - 40139</option>
                                        <option>AMAGORO - 50244</option>
                                        <option>AMALO (FORMERLY OLOOMIRANI) - 20424</option>
                                        <option>AMUKURA - 50403</option>
                                        <option>ASUMBI - 40309</option>
                                        <option>ATHI RIVER - 00204</option>
                                        <option>AWASI - 40122</option>
                                        <option>BAHATI - 20113</option>
                                        <option>BAMBURI - 80101</option>
                                        <option>BANJA - 50316</option>
                                        <option>BARAGOI - 20601</option>
                                        <option>BARATON - 30306</option>
                                        <option>BARICHO - 10302</option>
                                        <option>BISSEL - 01101</option>
                                        <option>BOKOLI - 50206</option>
                                        <option>BOMET - 20400</option>
                                        <option>BONDENI - 20101</option>
                                        <option>BONDO - 40601</option>
                                        <option>BOOKER - 50137</option>
                                        <option>BORO - 40620</option>
                                        <option>BRIGADIER - 50245</option>
                                        <option>BUKURA - 50105</option>
                                        <option>BULIMBO - 50109</option>
                                        <option>BUMALA - 50404</option>
                                        <option>BUNGOMA - 50200</option>
                                        <option>BURA TANA - 70104</option>
                                        <option>BURNT FOREST - 30102</option>
                                        <option>BUSIA - 50400</option>
                                        <option>BUTERE - 50101</option>
                                        <option>BUTULA - 50405</option>
                                        <option>BUYOFU - 50210</option>
                                        <option>CHAMAKANGA - 50302</option>
                                        <option>CHANGAMWE - 80102</option>
                                        <option>CHAVAKALI - 50317</option>
                                        <option>CHEBIEMIT - 30706</option>
                                        <option>CHEBORGE - 20215</option>
                                        <option>CHEBUNYO - 20401</option>
                                        <option>CHEMAMUL - 20222</option>
                                        <option>CHEMANER - 20407</option>
                                        <option>CHEMELIL - 40116</option>
                                        <option>CHEPARERIA - 30605</option>
                                        <option>CHEPKOILEL - 30133</option>
                                        <option>CHEPKORIO - 30129</option>
                                        <option>CHEPTAIS - 50201</option>
                                        <option>CHESINENDET - 20217</option>
                                        <option>CHIAKANYINGA - 60410</option>
                                        <option>CHIAKARIGA - 60409</option>
                                        <option>CHOGORIA - 60401</option>
                                        <option>CHUKA - 60400</option>
                                        <option>CHUMVI - 90147</option>
                                        <option>CHUMVINI - 80314</option>
                                        <option>CHWELE - 50202</option>
                                        <option>COAST GEN.HOSTIPAL - 80103</option>
                                        <option>DADAAB - 70103</option>
                                        <option>DAGO - 40112</option>
                                        <option>DARAJA MBILI - 40117</option>
                                        <option>DAYSTAR - 90145</option>
                                        <option>DIANI BEACH - 80401</option>
                                        <option>DOCKS - 80104</option>
                                        <option>DOLDOL - 10401</option>
                                        <option>DONYOSABUK - 01027</option>
                                        <option>EGERTON - 20115</option>
                                        <option>EKALAKALA - 90139</option>
                                        <option>ELBURGON - 20102</option>
                                        <option>ELDAMA RAVINE - 20103</option>
                                        <option>ELDORET - 30100</option>
                                        <option>ELWAK - 70301</option>
                                        <option>EMALI - 90121</option>
                                        <option>EMBU - 60100</option>
                                        <option>EMUHAYA - 50314</option>
                                        <option>ENDARASHA - 10107</option>
                                        <option>ENDEBESS - 30201</option>
                                        <option>ETAGO - 40208</option>
                                        <option>FAZA - 80501</option>
                                        <option>FORT TERNAN - 20209</option>
                                        <option>FUNYULA - 50406</option>
                                        <option>GACHARAGE-INI - 10210</option>
                                        <option>GAITU - 60209</option>
                                        <option>GAKERE ROAD - 10109</option>
                                        <option>GAKINDU - 10111</option>
                                        <option>GAKUNGU - 10239</option>
                                        <option>GAMBOGI - 50318</option>
                                        <option>GANZE - 80205</option>
                                        <option>GARBA TULLA - 60301</option>
                                        <option>GARISSA - 70100</option>
                                        <option>GARSEN - 80201</option>
                                        <option>GATHUGU - 00240</option>
                                        <option>GATITU - 10114</option>
                                        <option>GATUKUYU - 01028</option>
                                        <option>GATUNDU - 01030</option>
                                        <option>GATUNGA - 60404</option>
                                        <option>GATURA - 01013</option>
                                        <option>GEDE - 80208</option>
                                        <option>GESIMA - 40503</option>
                                        <option>GESUSU - 40201</option>
                                        <option>GIAKANJA - 10108</option>
                                        <option>GIKOE - 10213</option>
                                        <option>GILGIL - 20116</option>
                                        <option>GISAMBAI - 50304</option>
                                        <option>GITEMENE - 60212</option>
                                        <option>GITHONGO - 60205</option>
                                        <option>GITHUNGURI - 00216</option>
                                        <option>GITUAMBA - 01003</option>
                                        <option>GITUGI - 10209</option>
                                        <option>GONGONI - 80206</option>
                                        <option>GRIFTU - 70202</option>
                                        <option>HABASWEIN - 70201</option>
                                        <option>HAMISI - 50312</option>
                                        <option>HAWINGA - 40640</option>
                                        <option>HOLA - 70101</option>
                                        <option>HOMA BAY - 40300</option>
                                        <option>HURUMA - 30109</option>
                                        <option>IGARE - 40209</option>
                                        <option>IGOJI - 60402</option>
                                        <option>IGWAMITI - 20307</option>
                                        <option>IIANI - 90120</option>
                                        <option>IKALAASA - 90135</option>
                                        <option>IKONGE - 40501</option>
                                        <option>IKUTHA - 90207</option>
                                        <option>IKUU - 60405</option>
                                        <option>ISHIARA - 60102</option>
                                        <option>ISIBANIA - 40414</option>
                                        <option>ISIOLO - 60300</option>
                                        <option>ITEN - 30700</option>
                                        <option>ITHANGA - 01015</option>
                                        <option>KABARAK - 20157</option>
                                        <option>KABARNET - 30400</option>
                                        <option>KABARTONJO - 30401</option>
                                        <option>KABATI - 90205</option>
                                        <option>KABAZI - 20114</option>
                                        <option>KABIANGA - 20201</option>
                                        <option>KABIYET - 30303</option>
                                        <option>KACHELIBA - 30601</option>
                                        <option>KADONGO - 40223</option>
                                        <option>KAGIO - 10306</option>
                                        <option>KAGUMO - 10307</option>
                                        <option>KAGUNDU-INI - 01033</option>
                                        <option>KAGWE - 00223</option>
                                        <option>KAHEHO - 20304</option>
                                        <option>KAHUHIA - 10206</option>
                                        <option>KAHURO - 10201</option>
                                        <option>KAHUTI - 10214</option>
                                        <option>KAIMOSI - 50305</option>
                                        <option>KAJIADO - 01100</option>
                                        <option>KAKAMEGA - 50100</option>
                                        <option>KAKUMA - 30501</option>
                                        <option>KAKUNGA - 50115</option>
                                        <option>KALAMBA - 90122</option>
                                        <option>KALIMONI - 01001</option>
                                        <option>KALOKOL - 30502</option>
                                        <option>KALOLENI - 80105</option>
                                        <option>KAMARA - 20134</option>
                                        <option>KAMBIRI - 50116</option>
                                        <option>KAMBITI - 10226</option>
                                        <option>KAMPI-YA-SAMAKI - 30406</option>
                                        <option>KAMUKUYWA - 50216</option>
                                        <option>KAMURIAI - 50408</option>
                                        <option>KAMUWONGO - 90403</option>
                                        <option>KANDARA - 01034</option>
                                        <option>KANDIEGE - 40304</option>
                                        <option>KANGARI - 10218</option>
                                        <option>KANGEMA - 10202</option>
                                        <option>KANGUNDO - 90115</option>
                                        <option>KANJA - 60118</option>
                                        <option>KANJUKU - 01004</option>
                                        <option>KANYAKINE - 60206</option>
                                        <option>KAPCHENO - 30304</option>
                                        <option>KAPCHEROP - 30204</option>
                                        <option>KAPENGURIA - 30600</option>
                                        <option>KAPKATET - 20214</option>
                                        <option>KAPSABET - 30300</option>
                                        <option>KAPSARA - 30208</option>
                                        <option>KAPSOIT - 20211</option>
                                        <option>KAPSOKWONY - 50203</option>
                                        <option>KAPSOWAR - 30705</option>
                                        <option>KAPTAGAT - 30114</option>
                                        <option>KAPTARAKWA - 30701</option>
                                        <option>KARABA - 60105</option>
                                        <option>KARANDI - 20328</option>
                                        <option>KARATINA - 10101</option>
                                        <option>KARUNGU - 40401</option>
                                        <option>KARURI - 00219</option>
                                        <option>KARURUMO - 60117</option>
                                        <option>KASIKEU - 90123</option>
                                        <option>KATANGI - 90106</option>
                                        <option>KATHIANI - 90105</option>
                                        <option>KATHONZWENI - 90302</option>
                                        <option>KATHWANA - 60406</option>
                                        <option>KATITO - 40118</option>
                                        <option>KAVIANI - 90107</option>
                                        <option>KEBIRIGO - 40506</option>
                                        <option>KEDOWA - 20220</option>
                                        <option>KEEKOROK - 20501</option>
                                        <option>KEHANCHA - 40413</option>
                                        <option>KENDU BAY - 40301</option>
                                        <option>KENGELENI - 80122</option>
                                        <option>KENOL - 01020</option>
                                        <option>KENYENYA - 40211</option>
                                        <option>KERICHO - 20200</option>
                                        <option>KERINGET - 20131</option>
                                        <option>KEROKA - 40202</option>
                                        <option>KERUGOYA - 10300</option>
                                        <option>KESOGON - 30215</option>
                                        <option>KEUMBU - 40212</option>
                                        <option>KHAYEGA - 50104</option>
                                        <option>KHWISERO - 50135</option>
                                        <option>KIAMARIGA - 10122</option>
                                        <option>KIAMBU - 00900</option>
                                        <option>KIAMUTUGU - 10309</option>
                                        <option>KIANJAI - 60602</option>
                                        <option>KIANJOKOMA - 60122</option>
                                        <option>KIANYAGA - 10301</option>
                                        <option>KIBIRICHIA - 60201</option>
                                        <option>KIBWEZI - 90137</option>
                                        <option>KIGANJO - 10102</option>
                                        <option>KIGUMO - 10203</option>
                                        <option>KIHOYA - 10207</option>
                                        <option>KIIRUA - 60207</option>
                                        <option>KIJABE - 00220</option>
                                        <option>KIKIMA - 90125</option>
                                        <option>KIKONENI - 80410</option>
                                        <option>KIKUYU - 00902</option>
                                        <option>KILALA - 90305</option>
                                        <option>KILGORIS - 40700</option>
                                        <option>KILIFI - 80108</option>
                                        <option>KILINDINI - 80107</option>
                                        <option>KILINGILI - 50315</option>
                                        <option>KIMATHI WAY - 10140</option>
                                        <option>KIMBIMBI - 10310</option>
                                        <option>KIMILILI - 50204</option>
                                        <option>KIMININI - 30209</option>
                                        <option>KIMULOT - 20225</option>
                                        <option>KIMWARER - 30128</option>
                                        <option>KINAMBA - 20320</option>
                                        <option>KINANGO - 80405</option>
                                        <option>KINARI - 00227</option>
                                        <option>KINDARUMA - 01031</option>
                                        <option>KINORU - 60216</option>
                                        <option>KIONYO - 60211</option>
                                        <option>KIPKABUS - 30103</option>
                                        <option>KIPKARREN RIVER - 50241</option>
                                        <option>KIPKELION - 20202</option>
                                        <option>KIPTANGWANYI - 20133</option>
                                        <option>KIPTERE - 20213</option>
                                        <option>KIPTUGUMO - 20208</option>
                                        <option>KIRIAINI - 10204</option>
                                        <option>KIRITIRI - 60113</option>
                                        <option>KIRITU - 50313</option>
                                        <option>KIRWARA - 01018</option>
                                        <option>KISASI - 90204</option>
                                        <option>KISERIAN - 00206</option>
                                        <option>KISII - 40200</option>
                                        <option>KISUMU - 40100</option>
                                        <option>KITALE - 30200</option>
                                        <option>KITENGELA - 00241</option>
                                        <option>KITHIMANI - 90124</option>
                                        <option>KITHIMU - 60114</option>
                                        <option>KITHYOKO - 90144</option>
                                        <option>KITISE - 90303</option>
                                        <option>KITUI - 90200</option>
                                        <option>KIVUNGA - 90111</option>
                                        <option>KOBUJOI - 30305</option>
                                        <option>KOLA - 90108</option>
                                        <option>KOMBEWA - 40102</option>
                                        <option>KONDELE - 40103</option>
                                        <option>KORA - 10234</option>
                                        <option>KORU - 40104</option>
                                        <option>KOSELE - 40332</option>
                                        <option>KOYONZO - 50117</option>
                                        <option>KUBU KUBU - 60125</option>
                                        <option>KUTUS - 10304</option>
                                        <option>KWALE - 80403</option>
                                        <option>KYATUNE - 90220</option>
                                        <option>KYENI - 90209</option>
                                        <option>KYUSO - 90401</option>
                                        <option>LAARE - 60601</option>
                                        <option>LAIKIPIA CAMPUS - 20330</option>
                                        <option>LAISAMIS - 60502</option>
                                        <option>LAMU - 80500</option>
                                        <option>LANET - 20112</option>
                                        <option>LANGAS - 30112</option>
                                        <option>LESSOS - 30302</option>
                                        <option>LIKONI - 80110</option>
                                        <option>LIMURU - 00217</option>
                                        <option>LITEIN - 20210</option>
                                        <option>LODWAR - 30500</option>
                                        <option>LOITOKITOK - 00209</option>
                                        <option>LOIYANGALANI - 60501</option>
                                        <option>LOKICHOGGIO - 30503</option>
                                        <option>LOKITAUNG - 30504</option>
                                        <option>LOLGORIAN - 40701</option>
                                        <option>LONDIANI - 20203</option>
                                        <option>LONGISA - 20402</option>
                                        <option>LUANDA - 50307</option>
                                        <option>LUANDETI - 50240</option>
                                        <option>LUBAO - 50118</option>
                                        <option>LUGARI - 50108</option>
                                        <option>LUGULU - 50218</option>
                                        <option>LUHANO - 40623</option>
                                        <option>LUKUSI - 50230</option>
                                        <option>LUMAKANDA - 50242</option>
                                        <option>LUNGA LUNGA - 80402</option>
                                        <option>LUNZA - 50119</option>
                                        <option>LWAKHAKHA - 50220</option>
                                        <option>MAAI MAHIU - 20147</option>
                                        <option>MABUSI - 50235</option>
                                        <option>MACHAKOS - 90100</option>
                                        <option>MADARAKA - 01002</option>
                                        <option>MADIANY - 40613</option>
                                        <option>MADINA - 80207</option>
                                        <option>MAGADI - 00205</option>
                                        <option>MAGENA - 40516</option>
                                        <option>MAGO - 50325</option>
                                        <option>MAGOMBO - 40507</option>
                                        <option>MAGUMONI - 60403</option>
                                        <option>MAGUNGA - 40307</option>
                                        <option>MAGUTUNI - 60407</option>
                                        <option>MAGWAGWA - 40508</option>
                                        <option>MAKINDU - 90138</option>
                                        <option>MAKUENI - 90300</option>
                                        <option>MALAKISI - 50209</option>
                                        <option>MALAVA - 50103</option>
                                        <option>MALINDI - 80200</option>
                                        <option>MANDERA - 70300</option>
                                        <option>MANYATTA - 60101</option>
                                        <option>MARAGOLI - 50300</option>
                                        <option>MARAGUA - 10205</option>
                                        <option>MARALAL - 20600</option>
                                        <option>MARIAKANI - 80113</option>
                                        <option>MARIGAT - 30403</option>
                                        <option>MARIMA - 60408</option>
                                        <option>MARIMANTI - 60215</option>
                                        <option>MARMANET - 20322</option>
                                        <option>MARSABIT - 60500</option>
                                        <option>MASALANI - 70105</option>
                                        <option>MASENO - 40105</option>
                                        <option>MASHURU - 01103</option>
                                        <option>MASII - 90101</option>
                                        <option>MASINGA - 90141</option>
                                        <option>MATATHIA - 00221</option>
                                        <option>MATILIKU - 90140</option>
                                        <option>MATUGA - 80406</option>
                                        <option>MATUNDA - 30205</option>
                                        <option>MATUU - 90119</option>
                                        <option>MAUA - 60600</option>
                                        <option>MAUNGU - 80317</option>
                                        <option>MAVINDINI - 90304</option>
                                        <option>MAWEGO - 40310</option>
                                        <option>MAZERAS - 80114</option>
                                        <option>MBIRI - 10233</option>
                                        <option>MBITA - 40305</option>
                                        <option>MBITINI - 90214</option>
                                        <option>MBIUNI - 90110</option>
                                        <option>MBUMBUNI - 90127</option>
                                        <option>MEGA CITY - 40123</option>
                                        <option>MENENGAI - 20104</option>
                                        <option>MERTI - 60303</option>
                                        <option>MERU - 60200</option>
                                        <option>MFANGANO - 40319</option>
                                        <option>MGAMBONYI - 80313</option>
                                        <option>MGANGE - 80306</option>
                                        <option>MIATHENE - 60604</option>
                                        <option>MIGWANI - 90402</option>
                                        <option>MIHARATI - 20301</option>
                                        <option>MIKINDURI - 60607</option>
                                        <option>MILIMANI - 50138</option>
                                        <option>MILTON SIDING - 20123</option>
                                        <option>MIRANGINE - 20124</option>
                                        <option>MIROGI - 40320</option>
                                        <option>MISIKHU - 50207</option>
                                        <option>MITABONI - 90104</option>
                                        <option>MITUNGUU - 60204</option>
                                        <option>MIU - 90112</option>
                                        <option>MKOMANI - 80106</option>
                                        <option>MOBIL PLAZA - 00620</option>
                                        <option>MODO GASHE - 70102</option>
                                        <option>MOGOGOSIEK - 20403</option>
                                        <option>MOGOTIO - 20105</option>
                                        <option>MOI AIRPORT - 80115</option>
                                        <option>MOI UNIVERSITY - 30107</option>
                                        <option>MOIBEN - 30104</option>
                                        <option>MOIS BRIDGE - 30202</option>
                                        <option>MOKOMONI - 40510</option>
                                        <option>MOKOWE - 80502</option>
                                        <option>MOLO - 20106</option>
                                        <option>MOMBASA G.P.O - 80100</option>
                                        <option>MOSORIOT - 30307</option>
                                        <option>MOYALE - 60700</option>
                                        <option>MPEKETONI - 80503</option>
                                        <option>MSAMBWENI - 80404</option>
                                        <option>MTITU ANDEI - 90128</option>
                                        <option>MTONGWE - 80111</option>
                                        <option>MTOPANGA - 80117</option>
                                        <option>MTWAPA - 80109</option>
                                        <option>MUBWAYO - 50423</option>
                                        <option>MUGUNDA - 10129</option>
                                        <option>MUHORONI - 40107</option>
                                        <option>MUHURU BAY - 40409</option>
                                        <option>MUKHE - 50225</option>
                                        <option>MUKURWEINI - 10103</option>
                                        <option>MUMIAS - 50102</option>
                                        <option>MURANGA - 10200</option>
                                        <option>MUSANDA - 50125</option>
                                        <option>MUTHA - 90211</option>
                                        <option>MUTHARA - 60605</option>
                                        <option>MUTHETHENI - 90113</option>
                                        <option>MUTITUNI - 90117</option>
                                        <option>MUTOMO - 90201</option>
                                        <option>MUTUMBU - 40628</option>
                                        <option>MWALA - 90102</option>
                                        <option>MWATATE - 80305</option>
                                        <option>MWEIGA - 10104</option>
                                        <option>MWINGI - 90400</option>
                                        <option>MYANGA - 50226</option>
                                        <option>NAIRAGE ENKARE - 20504</option>
                                        <option>NAIROBI-BURUBURU - 00515</option>
                                        <option>NAIROBI-CITY SQUARE - 00200</option>
                                        <option>NAIROBI-DANDORA - 00516</option>
                                        <option>NAIROBI-EASTLEIGH - 00610</option>
                                        <option>NAIROBI-EMBAKASI - 00521</option>
                                        <option>NAIROBI-ENTERPRISE ROAD - 00500</option>
                                        <option>NAIROBI-G.P.O NAIROBI - 00100</option>
                                        <option>NAIROBI-GIGIRI - 00601</option>
                                        <option>NAIROBI-J.K.I. AIRPORT - 00501</option>
                                        <option>NAIROBI-JAMIA - 00101</option>
                                        <option>NAIROBI-KAMITI - 00607</option>
                                        <option>NAIROBI-KANGEMI - 00625</option>
                                        <option>NAIROBI-KAREN - 00502</option>
                                        <option>NAIROBI-KAYOLE - 00518</option>
                                        <option>NAIROBI-KENYATTA N.HOSPITAL - 00202</option>
                                        <option>NAIROBI-KENYATTA UNIVERSITY - 00609</option>
                                        <option>NAIROBI-LANGATA - 00509</option>
                                        <option>NAIROBI-LAVINGTON - 00603</option>
                                        <option>NAIROBI-LOWER KABETE - 00604</option>
                                        <option>NAIROBI-MAKONGENI - 00510</option>
                                        <option>NAIROBI-MATHARE VALLEY - 00611</option>
                                        <option>NAIROBI-MBAGATHI - 00503</option>
                                        <option>NAIROBI-MCHUMBI RD - 00504</option>
                                        <option>NAIROBI-MLOLONGO - 00519</option>
                                        <option>NAIROBI-MUTHAIGA - 00619</option>
                                        <option>NAIROBI-NGARA ROAD - 00600</option>
                                        <option>NAIROBI-NGONG ROAD - 00505</option>
                                        <option>NAIROBI-NYAYO STADIUM - 00506</option>
                                        <option>NAIROBI-PARKLANDS - 00623</option>
                                        <option>NAIROBI-RONALD NGALA ST. - 00300</option>
                                        <option>NAIROBI-RUAI - 00520</option>
                                        <option>NAIROBI-RUARAKA - 00618</option>
                                        <option>NAIROBI-SARIT CENTRE - 00606</option>
                                        <option>NAIROBI-TOM MBOYA ST - 00400</option>
                                        <option>NAIROBI-UHURU GARDENS - 00517</option>
                                        <option>NAIROBI-UTHIRU - 00605</option>
                                        <option>NAIROBI-VILLAGE MARKET - 00621</option>
                                        <option>NAIROBI-VIWANDANI - 00507</option>
                                        <option>NAIROBI-WESTLANDS - 00800</option>
                                        <option>NAIROBI-YAYA TOWERS - 00508</option>
                                        <option>NAISHI - 20142</option>
                                        <option>NAITIRI - 50211</option>
                                        <option>NAIVASHA - 20117</option>
                                        <option>NAKURU - 20100</option>
                                        <option>NAMANGA - 00207</option>
                                        <option>NAMBACHA - 50127</option>
                                        <option>NAMBALE - 50409</option>
                                        <option>NANDI HILLS - 30301</option>
                                        <option>NANGO - 40615</option>
                                        <option>NANYUKI - 10400</option>
                                        <option>NARO MORU - 10105</option>
                                        <option>NAROK - 20500</option>
                                        <option>NDALANI - 90118</option>
                                        <option>NDALU - 50212</option>
                                        <option>NDANAI - 20404</option>
                                        <option>NDARAGWA - 20306</option>
                                        <option>NDERU - 00229</option>
                                        <option>NDHIWA - 40302</option>
                                        <option>NDITHINI - 01016</option>
                                        <option>NDOOA - 90202</option>
                                        <option>NDORI - 40602</option>
                                        <option>NDUNYU NJERU - 20317</option>
                                        <option>NGAMBWA - 80311</option>
                                        <option>NGECHA - 00218</option>
                                        <option>NGEWA - 00901</option>
                                        <option>NGINYANG - 30404</option>
                                        <option>NGIYA - 40603</option>
                                        <option>NGONG HILLS - 00208</option>
                                        <option>NGUNI - 90407</option>
                                        <option>NGWATA - 90129</option>
                                        <option>NJORO - 20107</option>
                                        <option>NKONDI - 60214</option>
                                        <option>NKUBU - 60202</option>
                                        <option>NORTH-KINANGOP - 20318</option>
                                        <option>NUNGUNI - 90130</option>
                                        <option>NYABONDO - 40124</option>
                                        <option>NYAHURURU - 20300</option>
                                        <option>NYALI - 80118</option>
                                        <option>NYAMACHE - 40203</option>
                                        <option>NYAMARAMBE - 40206</option>
                                        <option>NYAMBUNWA - 40205</option>
                                        <option>NYAMIRA - 40500</option>
                                        <option>NYAMONYE - 40632</option>
                                        <option>NYANDHIWA - 40333</option>
                                        <option>NYANGANDE - 40126</option>
                                        <option>NYANGORI - 40127</option>
                                        <option>NYANGUSU - 40218</option>
                                        <option>NYANGWESO - 40311</option>
                                        <option>NYANSIONGO - 40502</option>
                                        <option>NYARAMBA - 40514</option>
                                        <option>NYATIKE - 40402</option>
                                        <option>NYERI - 10100</option>
                                        <option>NYILIMA - 40611</option>
                                        <option>NZEEKA - 90136</option>
                                        <option>NZIU - 90143</option>
                                        <option>OGEMBO - 40204</option>
                                        <option>OGONGO - 40323</option>
                                        <option>OL-KALOU - 20303</option>
                                        <option>OLENGURUONE - 20152</option>
                                        <option>OLJORO-OROK - 20302</option>
                                        <option>OLOLULUNGA - 20503</option>
                                        <option>OMOGONCHORO - 40221</option>
                                        <option>ONGATA RONGAI - 00511</option>
                                        <option>ORTUM - 30602</option>
                                        <option>OTHAYA - 10106</option>
                                        <option>OYUGIS - 40222</option>
                                        <option>PAP-ONDITI - 40111</option>
                                        <option>PAW AKUCHE - 40131</option>
                                        <option>PORT VICTORIA - 50410</option>
                                        <option>RABUOR - 40132</option>
                                        <option>RAGENGNI - 40604</option>
                                        <option>RANEN - 40412</option>
                                        <option>RANGWE - 40303</option>
                                        <option>RAPOGI - 40403</option>
                                        <option>RATTA - 40137</option>
                                        <option>RERU - 40133</option>
                                        <option>RHAMU - 70302</option>
                                        <option>RIGOMA - 40511</option>
                                        <option>RIOCHANDA - 40512</option>
                                        <option>RIOSIRI - 40220</option>
                                        <option>RODI KOPANY - 40326</option>
                                        <option>RONGAI - 20108</option>
                                        <option>RONGO - 40404</option>
                                        <option>RORET - 20204</option>
                                        <option>RUIRU - 00232</option>
                                        <option>RUMURUTI - 20321</option>
                                        <option>RUNYENJES - 60103</option>
                                        <option>RURII - 20313</option>
                                        <option>RURINGU - 10133</option>
                                        <option>SABA-SABA - 10208</option>
                                        <option>SAGALLA - 80308</option>
                                        <option>SAGANA - 10230</option>
                                        <option>SAMBURU - 80120</option>
                                        <option>SARE - 40405</option>
                                        <option>SAWAGONGO - 40612</option>
                                        <option>SEGA - 40614</option>
                                        <option>SEREM - 50308</option>
                                        <option>SERETUNIN - 30407</option>
                                        <option>SHIANDA - 50106</option>
                                        <option>SHIMBA HILLS - 80407</option>
                                        <option>SHIMONI - 80409</option>
                                        <option>SHINYALU - 50107</option>
                                        <option>SIAKAGO - 60104</option>
                                        <option>SIAYA - 40600</option>
                                        <option>SIDINDI - 40605</option>
                                        <option>SIGOMRE - 40635</option>
                                        <option>SIGOR - 20405</option>
                                        <option>SILIBWET - 20422</option>
                                        <option>SINDO - 40308</option>
                                        <option>SIONGIROI - 20423</option>
                                        <option>SIRISIA - 50208</option>
                                        <option>SOLAI - 20128</option>
                                        <option>SONDU - 40109</option>
                                        <option>SONGHOR - 40110</option>
                                        <option>SOSIOT - 20205</option>
                                        <option>SOTIK - 20406</option>
                                        <option>SOUTH-KINANGOP - 20319</option>
                                        <option>SOY - 30105</option>
                                        <option>SUBA-KURIA - 40418</option>
                                        <option>SUBUKIA - 20109</option>
                                        <option>SUGUTA MAR MAR - 20602</option>
                                        <option>SULMAC - 20151</option>
                                        <option>SULTAN HAMUD - 90132</option>
                                        <option>SUNA - 40400</option>
                                        <option>TABAKA - 40229</option>
                                        <option>TAKABA - 70303</option>
                                        <option>TALA - 90131</option>
                                        <option>TAMBACH - 30704</option>
                                        <option>TAUSA - 80309</option>
                                        <option>TAVETA - 80302</option>
                                        <option>TAWA - 90133</option>
                                        <option>TENGES - 30405</option>
                                        <option>THIKA - 01000</option>
                                        <option>TIMAU - 10406</option>
                                        <option>TIMBER MILLS - 20110</option>
                                        <option>TIMBOROA - 30108</option>
                                        <option>TIRIKI - 50309</option>
                                        <option>TOT - 30707</option>
                                        <option>TULIA - 90203</option>
                                        <option>TUNYAI - 60213</option>
                                        <option>TURBO - 30106</option>
                                        <option>UGUNJA - 40606</option>
                                        <option>UKUNDA - 80400</option>
                                        <option>UKWALA - 40607</option>
                                        <option>UPLANDS - 00222</option>
                                        <option>URANGA - 40608</option>
                                        <option>URIRI - 40228</option>
                                        <option>USENGE - 40609</option>
                                        <option>VIHIGA - 50310</option>
                                        <option>VIPINGO - 80119</option>
                                        <option>VITENGENI - 80211</option>
                                        <option>VOI - 80300</option>
                                        <option>WACHORO - 60121</option>
                                        <option>WAJIR - 70200</option>
                                        <option>WAMBA - 20603</option>
                                        <option>WAMUNYU - 90103</option>
                                        <option>WANGIGE - 00614</option>
                                        <option>WANGURU - 10303</option>
                                        <option>WANJOHI - 20305</option>
                                        <option>WATAMU - 80202</option>
                                        <option>WEBUYE - 50205</option>
                                        <option>WEI-WEI - 30603</option>
                                        <option>WERUGHA - 80303</option>
                                        <option>WINAM(KISUMU GPO EXTN.) - 40141</option>
                                        <option>WITU - 80504</option>
                                        <option>WODANGA - 50311</option>
                                        <option>WUNDANYI - 80304</option>
                                        <option>YALA - 40610</option>
                                        <option>YOANI - 90134</option>
                                        <option>ZIWA - 30214</option>
                                        <option>ZOMBE - 90213</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="town" class="font text-dark mt-2 form-label">Town</label>
                                    <input type="text" class="font form-control" name="town" value="<?= $employee['town'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="county" class="font text-dark mt-2 form-label">Home County</label>
                                    <select name="homecounty" class="font form-select form-control">
                                        <option selected disabled> <?= $employee['id/passport'] ?> </option>
                                        <option value="Baringo">Baringo</option>
                                        <option value="Bomet">Bomet</option>
                                        <option value="Bungoma">Bungoma</option>
                                        <option value="Busia">Busia</option>
                                        <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
                                        <option value="Embu">Embu</option>
                                        <option value="Foreigner">Foreigner</option>
                                        <option value="Garissa">Garissa</option>
                                        <option value="Homa Bay">Homa Bay</option>
                                        <option value="Isiolo">Isiolo</option>
                                        <option value="Kajiado">Kajiado</option>
                                        <option value="Kakamega">Kakamega</option>
                                        <option value="Kericho">Kericho</option>
                                        <option value="Kiambu">Kiambu</option>
                                        <option value="Kilifi">Kilifi</option>
                                        <option value="Kirinyaga">Kirinyaga</option>
                                        <option value="Kisii">Kisii</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Kitui">Kitui</option>
                                        <option value="Kwale">Kwale</option>
                                        <option value="Laikipia">Laikipia</option>
                                        <option value="Lamu">Lamu</option>
                                        <option value="Machakos">Machakos</option>
                                        <option value="Makueni">Makueni</option>
                                        <option value="Mandera">Mandera</option>
                                        <option value="Marsabit">Marsabit</option>
                                        <option value="Meru">Meru</option>
                                        <option value="Migori">Migori</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Murang'a">Murang'a</option>
                                        <option value="Nairobi">Nairobi</option>
                                        <option value="Nakuru">Nakuru</option>
                                        <option value="Nandi">Nandi</option>
                                        <option value="Narok">Narok</option>
                                        <option value="Nyamira">Nyamira</option>
                                        <option value="Nyandarua">Nyandarua</option>
                                        <option value="Nyeri">Nyeri</option>
                                        <option value="Samburu">Samburu</option>
                                        <option value="Siaya">Siaya</option>
                                        <option value="Taita Taveta">Taita Taveta</option>
                                        <option value="Tana River">Tana River</option>
                                        <option value="Tharaka Nithi">Tharaka Nithi</option>
                                        <option value="Trans Nzoia">Trans Nzoia</option>
                                        <option value="Turkana">Turkana</option>
                                        <option value="Uasin Gishu">Uasin Gishu</option>
                                        <option value="Vihiga">Vihiga</option>
                                        <option value="Wajir">Wajir</option>
                                        <option value="West Pokot">West Pokot</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="status" class="font text-dark mt-2 form-label">Marital Status</label>
                                    <select name="status" class="font form-select form-control" >
                                        <option selected disabled> <?= $employee['id/passport'] ?> </option>
                                        <option>Married</option>
                                        <option>Widowed</option>
                                        <option>Separated</option>
                                        <option>Divorced</option>
                                        <option>Single</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="religion" class="font text-dark mt-2 form-label">Religion</label>
                                    <select class="font form-select form-control" name="religion">
                                        <option selected disabled> <?= $employee['religion'] ?> </option>
                                        <option value="African Inland Church">African Inland Church</option>
                                        <option value="Agnostic">Agnostic</option>
                                        <option value="Agnosticism">Agnosticism</option>
                                        <option value="Anglican">Anglican</option>
                                        <option value="Baptist">Baptist</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Jain">Jain</option>
                                        <option value="Jehovah Witness">Jehovah Witness</option>
                                        <option value="Jewish">Jewish</option>
                                        <option value="Lutheran">Lutheran</option>
                                        <option value="Methodist">Methodist</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Orthodox">Orthodox</option>
                                        <option value="Pentecostal/Evangelicals">Pentecostal/Evangelicals</option>
                                        <option value="Presbyterian">Presbyterian</option>
                                        <option value="Protestant">Protestant</option>
                                        <option value="SDA">SDA</option>
                                        <option value="Salvation Army">Salvation Army</option>
                                        <option value="Sikh">Sikh</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="residence" class="font text-dark mt-2 form-label">Residence</label>
                                    <input type="text" class="font form-control" name="residence"  value="<?= $employee['residence'] ?>" >
                                </div>
                                <div class="col-3 pd-telephone-input">
                                    <label for="tel" class="font text-dark mt-2 form-label">Home Tel</label>
                                    <input type="tel" class="font form-control" name="tel"  value="<?= $employee['hometel'] ?>">
                                </div>
                                <div class="col-3 ">
                                    <label for="mobile" class="font text-dark mt-2 form-label">Mobile Number</label>
                                    <input type="tel" class="font form-control" name="mobile"  value="<?= $employee['mobilenum'] ?>">
                                </div>
                                <div class="col-3 ">
                                    <label for="email" class="font text-dark mt-2 form-label">Personal Email</label>
                                    <input type="email" class="font form-control" name="email">
                                </div>
                                <div class="col-3 ">
                                    <label for="kra" class="font text-dark mt-2 form-label">KRA PIN</label>
                                    <input type="text" class="font form-control" name="kra" disabled>
                                </div>
                                <div class="col-3 ">
                                    <label for="nhif" class="font text-dark mt-2 form-label">NHIF Card Number</label>
                                    <input type="text" class="font form-control" name="nhif">
                                </div>
                                <div class="col-3 ">
                                    <label for="nssf" class="font text-dark mt-2 form-label">NSSF Card Number</label>
                                    <input type="text" class="font form-control" name="nssf">
                                </div>
                                <div class="col-3">
                                    <label for="department" class="font text-dark mt-2 form-label">Department</label>
                                    <select name="department" class="font form-select">
                                        <option selected></option>
                                        <?php foreach($departments as $department){
                                            echo "<option value=".$department["departmentid"].">".$department["departmentname"]."</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-3 ">
                                    <label for="role" class="font text-dark mt-2 form-label">Role</label>
                                    <select name="role" class="font form-select">
                                        <option selected></option>
                                        <option value="1">Employee</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ml-5 col-sm8- offset-sm-2 offset-md-5 pt-4 from-wrapper">
                                    <button type="submit" class="btn mb-4 button top-50 start-50 translate-middle position-absolute">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row position-absolute justify-content-evenly">
                        <?php if(session()->has('errors')):?>
                            <div class="alert alert-warning">
                                <?php
                                foreach (session('errors') as $error):
                                    ?>
                                    <li><?php echo $error ?></li>
                                <?php
                                endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/form-validation.js"></script>
</body>
</html>