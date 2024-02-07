<form method="post" action="{{ url('/storepayment') }}"
    class="w-full max-w-md rounded-lg overflow-hidden py-1 space-y-6 relative bg-transparent px-2"
    enctype="multipart/form-data" id="form">
    @csrf


    <div class="relative">

        <label class="pb-1 text-gradient-100 block text-xs tracking-normal font-semibold" for="bank">Depositor&#39;s
            Bank</label>
        <select class="block w-full text-sm text-gray-700 px-4 py-3 h-12 bg-transparent border-b border-0 border-gray-300
    focus:ring-0 ring-0 font-medium" id="bank" name="bank" required>
            <option value=" AL-Barakah Microfinance Bank"> AL-Barakah Microfinance Bank</option>
            <option value="3Line Card Management Limited">3Line Card Management Limited</option>
            <option value="9 Payment Service Bank">9 Payment Service Bank</option>
            <option value="AB Microfinance Bank">AB Microfinance Bank</option>
            <option value="ABU Microfinance Bank">ABU Microfinance Bank</option>
            <option value="AG Mortgage Bank">AG Mortgage Bank</option>
            <option value="AMJU Unique Microfinance Bank">AMJU Unique Microfinance Bank</option>
            <option value="AMML MFB">AMML MFB</option>
            <option value="ASOSavings &amp; Loans">ASOSavings &amp; Loans</option>
            <option value="Aaa Finance">Aaa Finance</option>
            <option value="Abbey Mortgage Bank">Abbey Mortgage Bank</option>
            <option value="Above Only Microfinance Bank">Above Only Microfinance Bank</option>
            <option value="Abucoop  Microfinance Bank">Abucoop Microfinance Bank</option>
            <option value="Abulesoro Microfinance Bank Ltd">Abulesoro Microfinance Bank Ltd</option>
            <option value="Accelerex Network">Accelerex Network</option>
            <option value="Access Bank">Access Bank</option>
            <option value="AccessMobile">AccessMobile</option>
            <option value="Accion Microfinance Bank">Accion Microfinance Bank</option>
            <option value="Ada Microfinance Bank">Ada Microfinance Bank</option>
            <option value="Addosser Microfinance Bank">Addosser Microfinance Bank</option>
            <option value="Adeyemi College Staff Microfinance Bank">Adeyemi College Staff
                Microfinance Bank</option>
            <option value="Afekhafe Microfinance Bank">Afekhafe Microfinance Bank</option>
            <option value="Afemai Microfinance Bank">Afemai Microfinance Bank</option>
            <option value="Agosasa Microfinance Bank">Agosasa Microfinance Bank</option>
            <option value="Aku Microfinance Bank">Aku Microfinance Bank</option>
            <option value="Akuchukwu Microfinance Bank Ltd">Akuchukwu Microfinance Bank Ltd</option>
            <option value="Akwa Savings &amp; Loans Limited">Akwa Savings &amp; Loans Limited
            </option>
            <option value="Al-Hayat Microfinance Bank">Al-Hayat Microfinance Bank</option>
            <option value="Alekun Microfinance Bank">Alekun Microfinance Bank</option>
            <option value="Alert Microfinance Bank">Alert Microfinance Bank</option>
            <option value="Allworkers Microfinance Bank">Allworkers Microfinance Bank</option>
            <option value="Ally Microfinance Bank">Ally Microfinance Bank</option>
            <option value="Alpha Kapital Microfinance Bank">Alpha Kapital Microfinance Bank</option>
            <option value="Alvana Microfinance Bank">Alvana Microfinance Bank</option>
            <option value="Amac Microfinance Bank">Amac Microfinance Bank</option>
            <option value="Ampersand Microfinance Bank">Ampersand Microfinance Bank</option>
            <option value="Anchorage Microfinance Bank">Anchorage Microfinance Bank</option>
            <option value="Aniocha Microfinance Bank">Aniocha Microfinance Bank</option>
            <option value="Apeks Microfinance Bank">Apeks Microfinance Bank</option>
            <option value="Apple  Microfinance Bank">Apple Microfinance Bank</option>
            <option value="Aramoko Microfinance Bank">Aramoko Microfinance Bank</option>
            <option value="Arca Payments">Arca Payments</option>
            <option value="Arise Microfinance Bank">Arise Microfinance Bank</option>
            <option value="Aspire Microfinance Bank Ltd">Aspire Microfinance Bank Ltd</option>
            <option value="Assets Matrix Microfinance Bank">Assets Matrix Microfinance Bank</option>
            <option value="Assets Microfinance Bank">Assets Microfinance Bank</option>
            <option value="Astrapolaris Microfinance Bank">Astrapolaris Microfinance Bank</option>
            <option value="Atbu  Microfinance Bank">Atbu Microfinance Bank</option>
            <option value="Auchi Microfinance Bank">Auchi Microfinance Bank</option>
            <option value="Avuenegbe Microfinance Bank">Avuenegbe Microfinance Bank</option>
            <option value="Aztec Microfinance Bank">Aztec Microfinance Bank</option>
            <option value="BANC CORP MICROFINANCE BANK">BANC CORP MICROFINANCE BANK</option>
            <option value="BC Kash Microfinance Bank">BC Kash Microfinance Bank</option>
            <option value="BRIDGEWAY MICROFINANCE BANK">BRIDGEWAY MICROFINANCE BANK</option>
            <option value="Baines Credit Microfinance Bank">Baines Credit Microfinance Bank</option>
            <option value="Balera Microfinance Bank Ltd">Balera Microfinance Bank Ltd</option>
            <option value="Balogun Fulani  Microfinance Bank">Balogun Fulani Microfinance Bank
            </option>
            <option value="Balogun Gambari Microfinance Bank">Balogun Gambari Microfinance Bank
            </option>
            <option value="Banex Microfinance Bank">Banex Microfinance Bank</option>
            <option value="Baobab Microfinance Bank">Baobab Microfinance Bank</option>
            <option value="Bayero Microfinance Bank">Bayero Microfinance Bank</option>
            <option value="Benysta Microfinance Bank">Benysta Microfinance Bank</option>
            <option value="Beta-Access Yello">Beta-Access Yello</option>
            <option value="Bipc Microfinance Bank">Bipc Microfinance Bank</option>
            <option value="Bishopgate Microfinance Bank">Bishopgate Microfinance Bank</option>
            <option value="Blue Investments Microfinance Bank">Blue Investments Microfinance Bank
            </option>
            <option value="Bluewhales  Microfinance Bank">Bluewhales Microfinance Bank</option>
            <option value="Boctrust Microfinance Bank">Boctrust Microfinance Bank</option>
            <option value="Boi Mf Bank">Boi Mf Bank</option>
            <option value="Boji Boji Microfinance Bank">Boji Boji Microfinance Bank</option>
            <option value="Bonghe Microfinance Bank">Bonghe Microfinance Bank</option>
            <option value="Borgu Microfinance Bank">Borgu Microfinance Bank</option>
            <option value="Borno Renaissance Microfinance Bank">Borno Renaissance Microfinance Bank
            </option>
            <option value="Boromu Microfinance Bank">Boromu Microfinance Bank</option>
            <option value="Borstal Microfinance Bank">Borstal Microfinance Bank</option>
            <option value="Bosak Microfinance Bank">Bosak Microfinance Bank</option>
            <option value="Bowen Microfinance Bank">Bowen Microfinance Bank</option>
            <option value="Branch International Financial Services">Branch International Financial
                Services</option>
            <option value="Brent Mortgage Bank">Brent Mortgage Bank</option>
            <option value="Brethren Microfinance Bank">Brethren Microfinance Bank</option>
            <option value="Brightway Microfinance Bank">Brightway Microfinance Bank</option>
            <option value="Broadview Microfinance Bank Ltd">Broadview Microfinance Bank Ltd</option>
            <option value="Bubayero Microfinance Bank">Bubayero Microfinance Bank</option>
            <option value="Bud Infrastructure Limited">Bud Infrastructure Limited</option>
            <option value="Business Support Microfinance Bank">Business Support Microfinance Bank
            </option>
            <option value="CEMCS Microfinance Bank">CEMCS Microfinance Bank</option>
            <option value="CIT Microfinance Bank">CIT Microfinance Bank</option>
            <option value="Calabar Microfinance Bank">Calabar Microfinance Bank</option>
            <option value="Capitalmetriq Swift Microfinance Bank">Capitalmetriq Swift Microfinance
                Bank</option>
            <option value="Capricorn Digital">Capricorn Digital</option>
            <option value="Capstone Mf Bank">Capstone Mf Bank</option>
            <option value="Carbon">Carbon</option>
            <option value="Caretaker Microfinance Bank">Caretaker Microfinance Bank</option>
            <option value="Cashconnect   Microfinance Bank">Cashconnect Microfinance Bank</option>
            <option value="Catland Microfinance Bank">Catland Microfinance Bank</option>
            <option value="Cedar Microfinance Bank Ltd">Cedar Microfinance Bank Ltd</option>
            <option value="Cellulant">Cellulant</option>
            <option value="Cellulant Pssp">Cellulant Pssp</option>
            <option value="Central Bank Of Nigeria">Central Bank Of Nigeria</option>
            <option value="ChamsMobile">ChamsMobile</option>
            <option value="Chanelle Bank">Chanelle Bank</option>
            <option value="Chase Microfinance Bank">Chase Microfinance Bank</option>
            <option value="Cherish Microfinance Bank">Cherish Microfinance Bank</option>
            <option value="Chibueze Microfinance Bank">Chibueze Microfinance Bank</option>
            <option value="Chikum Microfinance Bank">Chikum Microfinance Bank</option>
            <option value="Chukwunenye  Microfinance Bank">Chukwunenye Microfinance Bank</option>
            <option value="Cintrust Microfinance Bank">Cintrust Microfinance Bank</option>
            <option value="Citi Bank">Citi Bank</option>
            <option value="Citizen Trust Microfinance Bank Ltd">Citizen Trust Microfinance Bank Ltd
            </option>
            <option value="Cloverleaf  Microfinance Bank">Cloverleaf Microfinance Bank</option>
            <option value="Coalcamp Microfinance Bank">Coalcamp Microfinance Bank</option>
            <option value="Coastline Microfinance Bank">Coastline Microfinance Bank</option>
            <option value="Confidence Microfinance Bank Ltd">Confidence Microfinance Bank Ltd
            </option>
            <option value="Consistent Trust Microfinance Bank Ltd">Consistent Trust Microfinance
                Bank Ltd</option>
            <option value="Consumer Microfinance Bank">Consumer Microfinance Bank</option>
            <option value="Contec Global Infotech Limited (NowNow)">Contec Global Infotech Limited
                (NowNow)</option>
            <option value="Coop Mortgage Bank">Coop Mortgage Bank</option>
            <option value="Corestep Microfinance Bank">Corestep Microfinance Bank</option>
            <option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
            <option value="County Finance Ltd">County Finance Ltd</option>
            <option value="Covenant Microfinance Bank">Covenant Microfinance Bank</option>
            <option value="Credit Afrique Microfinance Bank">Credit Afrique Microfinance Bank
            </option>
            <option value="Crescent Microfinance Bank">Crescent Microfinance Bank</option>
            <option value="Crossriver  Microfinance Bank">Crossriver Microfinance Bank</option>
            <option value="Crowdforce">Crowdforce</option>
            <option value="Crutech  Microfinance Bank">Crutech Microfinance Bank</option>
            <option value="DOT MICROFINANCE BANK">DOT MICROFINANCE BANK</option>
            <option value="Davodani  Microfinance Bank">Davodani Microfinance Bank</option>
            <option value="Daylight Microfinance Bank">Daylight Microfinance Bank</option>
            <option value="Delta Trust Mortgage Bank">Delta Trust Mortgage Bank</option>
            <option value="ENaira">ENaira</option>
            <option value="Eagle Flight Microfinance Bank">Eagle Flight Microfinance Bank</option>
            <option value="Eartholeum">Eartholeum</option>
            <option value="Ebsu Microfinance Bank">Ebsu Microfinance Bank</option>
            <option value="EcoBank PLC">EcoBank PLC</option>
            <option value="EcoMobile">EcoMobile</option>
            <option value="Ecobank Xpress Account">Ecobank Xpress Account</option>
            <option value="Edfin Microfinance Bank">Edfin Microfinance Bank</option>
            <option value="Egwafin Microfinance Bank Ltd">Egwafin Microfinance Bank Ltd</option>
            <option value="Ek-Reliable Microfinance Bank">Ek-Reliable Microfinance Bank</option>
            <option value="Ekimogun Microfinance Bank">Ekimogun Microfinance Bank</option>
            <option value="Ekondo MFB">Ekondo MFB</option>
            <option value="Emeralds Microfinance Bank">Emeralds Microfinance Bank</option>
            <option value="Empire trust MFB">Empire trust MFB</option>
            <option value="Enrich Microfinance Bank">Enrich Microfinance Bank</option>
            <option value="Enterprise Bank">Enterprise Bank</option>
            <option value="Esan Microfinance Bank">Esan Microfinance Bank</option>
            <option value="Eso-E Microfinance Bank">Eso-E Microfinance Bank</option>
            <option value="Evangel Microfinance Bank">Evangel Microfinance Bank</option>
            <option value="Evergreen Microfinance Bank">Evergreen Microfinance Bank</option>
            <option value="Ewt Microfinance Bank">Ewt Microfinance Bank</option>
            <option value="Excellent Microfinance Bank">Excellent Microfinance Bank</option>
            <option value="Eyowo MFB">Eyowo MFB</option>
            <option value="FAST Microfinance Bank">FAST Microfinance Bank</option>
            <option value="FBN Mortgages Limited">FBN Mortgages Limited</option>
            <option value="FBNMobile">FBNMobile</option>
            <option value="FBNQUEST Merchant Bank">FBNQUEST Merchant Bank</option>
            <option value="FCMB Easy Account">FCMB Easy Account</option>
            <option value="FEDETH MICROFINANCE BANK">FEDETH MICROFINANCE BANK</option>
            <option value="FET">FET</option>
            <option value="FFS Microfinance Bank">FFS Microfinance Bank</option>
            <option value="FINATRUST MICROFINANCE BANK">FINATRUST MICROFINANCE BANK</option>
            <option value="FLOURISH MFB">FLOURISH MFB</option>
            <option value="FSDH Merchant Bank">FSDH Merchant Bank</option>
            <option value="Fairmoney Microfinance Bank Ltd">Fairmoney Microfinance Bank Ltd</option>
            <option value="Fame Microfinance Bank">Fame Microfinance Bank</option>
            <option value="Fcmb Microfinance Bank">Fcmb Microfinance Bank</option>
            <option value="Fct Microfinance Bank">Fct Microfinance Bank</option>
            <option value="Federal Polytechnic Nekede Microfinance Bank">Federal Polytechnic Nekede
                Microfinance Bank</option>
            <option value="Federal University Dutse  Microfinance Bank">Federal University Dutse
                Microfinance Bank</option>
            <option value="Federalpoly Nasarawamfb">Federalpoly Nasarawamfb</option>
            <option value="Fewchore Finance Company Limited">Fewchore Finance Company Limited
            </option>
            <option value="Fha Mortgage Bank Ltd">Fha Mortgage Bank Ltd</option>
            <option value="Fidelity Bank">Fidelity Bank</option>
            <option value="Fidelity Mobile">Fidelity Mobile</option>
            <option value="Fidfund Microfinance Bank">Fidfund Microfinance Bank</option>
            <option value="Fims Microfinance Bank">Fims Microfinance Bank</option>
            <option value="Finca Microfinance Bank">Finca Microfinance Bank</option>
            <option value="Firmus MFB">Firmus MFB</option>
            <option value="First Bank PLC">First Bank PLC</option>
            <option value="First City Monument Bank">First City Monument Bank</option>
            <option value="First Generation Mortgage Bank">First Generation Mortgage Bank</option>
            <option value="First Heritage Microfinance Bank">First Heritage Microfinance Bank
            </option>
            <option value="First Multiple Microfinance Bank">First Multiple Microfinance Bank
            </option>
            <option value="First Option Microfinance Bank">First Option Microfinance Bank</option>
            <option value="First Royal Microfinance Bank">First Royal Microfinance Bank</option>
            <option value="Firstmidas Microfinance Bank Ltd">Firstmidas Microfinance Bank Ltd
            </option>
            <option value="Flutterwave Technology Solutions Limited">Flutterwave Technology
                Solutions Limited</option>
            <option value="Foresight Microfinance Bank">Foresight Microfinance Bank</option>
            <option value="Fortis Microfinance Bank">Fortis Microfinance Bank</option>
            <option value="FortisMobile">FortisMobile</option>
            <option value="Fortress Microfinance Bank">Fortress Microfinance Bank</option>
            <option value="Fullrange Microfinance Bank">Fullrange Microfinance Bank</option>
            <option value="Futminna Microfinance Bank">Futminna Microfinance Bank</option>
            <option value="Futo Microfinance Bank">Futo Microfinance Bank</option>
            <option value="GOODNEWS MFB">GOODNEWS MFB</option>
            <option value="GTMobile">GTMobile</option>
            <option value="Garki Microfinance Bank">Garki Microfinance Bank</option>
            <option value="Gashua Microfinance Bank">Gashua Microfinance Bank</option>
            <option value="Gateway Mortgage Bank">Gateway Mortgage Bank</option>
            <option value="Gbede Microfinance Bank">Gbede Microfinance Bank</option>
            <option value="Giant Stride Microfinance Bank">Giant Stride Microfinance Bank</option>
            <option value="Giginya Microfinance Bank">Giginya Microfinance Bank</option>
            <option value="Girei Microfinance Bank">Girei Microfinance Bank</option>
            <option value="Giwa Microfinance Bank">Giwa Microfinance Bank</option>
            <option value="Globus Bank">Globus Bank</option>
            <option value="Glory Microfinance Bank ">Glory Microfinance Bank </option>
            <option value="Gmb Microfinance Bank">Gmb Microfinance Bank</option>
            <option value="GoMoney">GoMoney</option>
            <option value="Good Neighbours Microfinance Bank">Good Neighbours Microfinance Bank
            </option>
            <option value="Gowans Microfinance Bank">Gowans Microfinance Bank</option>
            <option value="Green Energy Microfinance Bank Ltd">Green Energy Microfinance Bank Ltd
            </option>
            <option value="GreenBank Microfinance Bank">GreenBank Microfinance Bank</option>
            <option value="Greenville Microfinance Bank">Greenville Microfinance Bank</option>
            <option value="Greenwich Merchant Bank">Greenwich Merchant Bank</option>
            <option value="Grooming Microfinance Bank">Grooming Microfinance Bank</option>
            <option value="Gti  Microfinance Bank">Gti Microfinance Bank</option>
            <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
            <option value="Gwong Microfinance Bank">Gwong Microfinance Bank</option>
            <option value="Hackman Microfinance Bank">Hackman Microfinance Bank</option>
            <option value="Haggai Mortgage Bank Limited">Haggai Mortgage Bank Limited</option>
            <option value="Halacredit Microfinance Bank">Halacredit Microfinance Bank</option>
            <option value="Hasal Microfinance Bank">Hasal Microfinance Bank</option>
            <option value="Headway Microfinance Bank">Headway Microfinance Bank</option>
            <option value="Hedonmark">Hedonmark</option>
            <option value="Heritage Bank">Heritage Bank</option>
            <option value="HighStreet Microfinance Bank">HighStreet Microfinance Bank</option>
            <option value="Highland Microfinance Bank">Highland Microfinance Bank</option>
            <option value="Homebase Mortgage">Homebase Mortgage</option>
            <option value="Hopepsb">Hopepsb</option>
            <option value="IBILE Microfinance Bank">IBILE Microfinance Bank</option>
            <option value="IRL Microfinance Bank">IRL Microfinance Bank</option>
            <option value="Ibeto  Microfinance Bank">Ibeto Microfinance Bank</option>
            <option value="Ibolo Micorfinance Bank Ltd">Ibolo Micorfinance Bank Ltd</option>
            <option value="Ibom Fadama Microfinance Bank">Ibom Fadama Microfinance Bank</option>
            <option value="Ibu-Aje Microfinance">Ibu-Aje Microfinance</option>
            <option value="Ic Globalmicrofinance Bank">Ic Globalmicrofinance Bank</option>
            <option value="Ijebu-Ife Microfinance Bank Ltd">Ijebu-Ife Microfinance Bank Ltd</option>
            <option value="Ikenne Microfinance Bank">Ikenne Microfinance Bank</option>
            <option value="Ikire Microfinance Bank">Ikire Microfinance Bank</option>
            <option value="Ikoyi-Osun Microfinance Bank">Ikoyi-Osun Microfinance Bank</option>
            <option value="Ilaro Poly Microfinance Bank Ltd">Ilaro Poly Microfinance Bank Ltd
            </option>
            <option value="Ilasan Microfinance Bank">Ilasan Microfinance Bank</option>
            <option value="Illorin Microfinance Bank">Illorin Microfinance Bank</option>
            <option value="Ilora Microfinance Bank">Ilora Microfinance Bank</option>
            <option value="Imo State Microfinance Bank">Imo State Microfinance Bank</option>
            <option value="Imowo Microfinance Bank">Imowo Microfinance Bank</option>
            <option value="Imperial Homes Mortgage Bank">Imperial Homes Mortgage Bank</option>
            <option value="Infinity Microfinance Bank">Infinity Microfinance Bank</option>
            <option value="Infinity Trust Mortgage Bank">Infinity Trust Mortgage Bank</option>
            <option value="Innovectives Kesh">Innovectives Kesh</option>
            <option value="Insight Microfinance Bank">Insight Microfinance Bank</option>
            <option value="Intellifin">Intellifin</option>
            <option value="Interland Microfinance Bank">Interland Microfinance Bank</option>
            <option value="Interswitch Financial Inclusion Services (Ifis)">Interswitch Financial
                Inclusion Services (Ifis)</option>
            <option value="Interswitch Limited">Interswitch Limited</option>
            <option value="Iperu Microfinance Bank">Iperu Microfinance Bank</option>
            <option value="Isaleoyo Microfinance Bank">Isaleoyo Microfinance Bank</option>
            <option value="Ishie  Microfinance Bank">Ishie Microfinance Bank</option>
            <option value="Isuofia Microfinance Bank">Isuofia Microfinance Bank</option>
            <option value="Itex Integrated Services Limited">Itex Integrated Services Limited
            </option>
            <option value="Iwade Microfinance Bank Ltd">Iwade Microfinance Bank Ltd</option>
            <option value="Iwoama Microfinance Bank">Iwoama Microfinance Bank</option>
            <option value="Iyamoye Microfinance Bank Ltd">Iyamoye Microfinance Bank Ltd</option>
            <option value="Iyeru Okin Microfinance Bank Ltd">Iyeru Okin Microfinance Bank Ltd
            </option>
            <option value="Izon Microfinance Bank">Izon Microfinance Bank</option>
            <option value="Jaiz Bank">Jaiz Bank</option>
            <option value="Jessefield Microfinance Bank">Jessefield Microfinance Bank</option>
            <option value="Jubilee-Life Mortgage  Bank">Jubilee-Life Mortgage Bank</option>
            <option value="KCMB Microfinance Bank">KCMB Microfinance Bank</option>
            <option value="Kadick Integration Limited">Kadick Integration Limited</option>
            <option value="Kadpoly Microfinance Bank">Kadpoly Microfinance Bank</option>
            <option value="Kayvee Microfinance Bank">Kayvee Microfinance Bank</option>
            <option value="Kc Microfinance Bank">Kc Microfinance Bank</option>
            <option value="Kegow">Kegow</option>
            <option value="Kegow(Chamsmobile)">Kegow(Chamsmobile)</option>
            <option value="Keystone Bank">Keystone Bank</option>
            <option value="Kingdom College  Microfinance Bank">Kingdom College Microfinance Bank
            </option>
            <option value="Kontagora Microfinance Bank">Kontagora Microfinance Bank</option>
            <option value="Koraypay">Koraypay</option>
            <option value="Kredi Money Microfinance Bank">Kredi Money Microfinance Bank</option>
            <option value="Kuda">Kuda</option>
            <option value="Kwasu Mf Bank">Kwasu Mf Bank</option>
            <option value="La  Fayette Microfinance Bank">La Fayette Microfinance Bank</option>
            <option value="Lagos Building Investment Company">Lagos Building Investment Company
            </option>
            <option value="Landgold  Microfinance Bank">Landgold Microfinance Bank</option>
            <option value="Lapo Microfinance Bank">Lapo Microfinance Bank</option>
            <option value="Lavender Microfinance Bank">Lavender Microfinance Bank</option>
            <option value="Legend Microfinance Bank">Legend Microfinance Bank</option>
            <option value="Letshego MFB">Letshego MFB</option>
            <option value="Lifegate Microfinance Bank Ltd">Lifegate Microfinance Bank Ltd</option>
            <option value="Light Microfinance Bank">Light Microfinance Bank</option>
            <option value="Links Microfinance Bank">Links Microfinance Bank</option>
            <option value="Lobrem Microfinance Bank">Lobrem Microfinance Bank</option>
            <option value="Lotus Bank">Lotus Bank</option>
            <option value="Lovonus Microfinance Bank">Lovonus Microfinance Bank</option>
            <option value="M36">M36</option>
            <option value="MAUTECH Microfinance Bank">MAUTECH Microfinance Bank</option>
            <option value="Mainland Microfinance Bank">Mainland Microfinance Bank</option>
            <option value="Mainstreet Microfinance Bank">Mainstreet Microfinance Bank</option>
            <option value="Maintrust Microfinance Bank">Maintrust Microfinance Bank</option>
            <option value="Malachy Microfinance Bank">Malachy Microfinance Bank</option>
            <option value="Manny Microfinance bank">Manny Microfinance bank</option>
            <option value="Maritime Microfinance Bank">Maritime Microfinance Bank</option>
            <option value="Mayfair  Microfinance Bank">Mayfair Microfinance Bank</option>
            <option value="Mayfresh Mortgage Bank">Mayfresh Mortgage Bank</option>
            <option value="Megapraise Microfinance Bank">Megapraise Microfinance Bank</option>
            <option value="Memphis Microfinance Bank">Memphis Microfinance Bank</option>
            <option value="Mercury MFB">Mercury MFB</option>
            <option value="Meridian Microfinance Bank">Meridian Microfinance Bank</option>
            <option value="Mgbidi Microfinance Bank">Mgbidi Microfinance Bank</option>
            <option value="Microsystems Investment And Development Limited">Microsystems Investment
                And Development Limited</option>
            <option value="Microvis Microfinance Bank">Microvis Microfinance Bank</option>
            <option value="Midland Microfinance Bank">Midland Microfinance Bank</option>
            <option value="Mint-Finex MICROFINANCE BANK">Mint-Finex MICROFINANCE BANK</option>
            <option value="Mkudi">Mkudi</option>
            <option value="Molusi Microfinance Bank">Molusi Microfinance Bank</option>
            <option value="Momo Psb">Momo Psb</option>
            <option value="Monarch Microfinance Bank">Monarch Microfinance Bank</option>
            <option value="Money Master Psb">Money Master Psb</option>
            <option value="Money Trust Microfinance Bank">Money Trust Microfinance Bank</option>
            <option value="MoneyBox">MoneyBox</option>
            <option value="Moniepoint Microfinance Bank">Moniepoint Microfinance Bank</option>
            <option value="Moyofade Mf Bank">Moyofade Mf Bank</option>
            <option value="Mozfin Microfinance Bank">Mozfin Microfinance Bank</option>
            <option value="Mutual Benefits Microfinance Bank">Mutual Benefits Microfinance Bank
            </option>
            <option value="Mutual Trust Microfinance Bank">Mutual Trust Microfinance Bank</option>
            <option value="NIP Virtual Bank">NIP Virtual Bank</option>
            <option value="NIRSAL Microfinance Bank">NIRSAL Microfinance Bank</option>
            <option value="NPF MicroFinance Bank">NPF MicroFinance Bank</option>
            <option value="Nagarta Microfinance Bank">Nagarta Microfinance Bank</option>
            <option value="Nasarawa Microfinance Bank">Nasarawa Microfinance Bank</option>
            <option value="Navy Microfinance Bank">Navy Microfinance Bank</option>
            <option value="Ndiorah Microfinance Bank">Ndiorah Microfinance Bank</option>
            <option value="Neptune Microfinance Bank">Neptune Microfinance Bank</option>
            <option value="Netapps Technology Limited">Netapps Technology Limited</option>
            <option value="New Dawn Microfinance Bank">New Dawn Microfinance Bank</option>
            <option value="New Golden Pastures Microfinance Bank">New Golden Pastures Microfinance
                Bank</option>
            <option value="New Prudential Bank">New Prudential Bank</option>
            <option value="Newedge Finance Ltd">Newedge Finance Ltd</option>
            <option value="Nibssussd Payments">Nibssussd Payments</option>
            <option value="Nice Microfinance Bank">Nice Microfinance Bank</option>
            <option value="Nigeria Prisonsmicrofinance Bank">Nigeria Prisonsmicrofinance Bank
            </option>
            <option value="Nkpolu-Ust Microfinance">Nkpolu-Ust Microfinance</option>
            <option value="Nomba Financial Services Limited">Nomba Financial Services Limited
            </option>
            <option value="Nova Merchant Bank">Nova Merchant Bank</option>
            <option value="Nsuk  Microfinance Bank">Nsuk Microfinance Bank</option>
            <option value="Numo Microfinance Bank">Numo Microfinance Bank</option>
            <option value="Nuture Microfinance Bank">Nuture Microfinance Bank</option>
            <option value="Nwannegadi Microfinance Bank">Nwannegadi Microfinance Bank</option>
            <option value="Oakland Microfinance Bank">Oakland Microfinance Bank</option>
            <option value="Oau Microfinance Bank Ltd">Oau Microfinance Bank Ltd</option>
            <option value="Oche Microfinance Bank">Oche Microfinance Bank</option>
            <option value="Octopus Microfinance Bank Ltd">Octopus Microfinance Bank Ltd</option>
            <option value="Ohafia Microfinance Bank">Ohafia Microfinance Bank</option>
            <option value="Ojokoro Microfinance Bank">Ojokoro Microfinance Bank</option>
            <option value="Oke-Aro Oredegbe Microfinance Bank Ltd">Oke-Aro Oredegbe Microfinance
                Bank Ltd</option>
            <option value="Okpoga Microfinance Bank">Okpoga Microfinance Bank</option>
            <option value="Okuku Microfinance Bank Ltd">Okuku Microfinance Bank Ltd</option>
            <option value="Olabisi Onabanjo University Microfinance Bank">Olabisi Onabanjo
                University Microfinance Bank</option>
            <option value="Olofin Owena Microfinance Bank">Olofin Owena Microfinance Bank</option>
            <option value="Olowolagba Microfinance Bank">Olowolagba Microfinance Bank</option>
            <option value="Oluchukwu Microfinance Bank">Oluchukwu Microfinance Bank</option>
            <option value="Oluyole Microfinance Bank">Oluyole Microfinance Bank</option>
            <option value="Omiye Microfinance Bank">Omiye Microfinance Bank</option>
            <option value="Omoluabi savings and loans">Omoluabi savings and loans</option>
            <option value="One Finance">One Finance</option>
            <option value="Opay">Opay</option>
            <option value="Optimus Bank">Optimus Bank</option>
            <option value="Oraukwu  Microfinance Bank">Oraukwu Microfinance Bank</option>
            <option value="Orokam Microfinance Bank Ltd">Orokam Microfinance Bank Ltd</option>
            <option value="Oscotech Microfinance Bank">Oscotech Microfinance Bank</option>
            <option value="Ospoly Microfinance Bank">Ospoly Microfinance Bank</option>
            <option value="Otech Microfinance Bank Ltd">Otech Microfinance Bank Ltd</option>
            <option value="Otuo Microfinance Bank Ltd">Otuo Microfinance Bank Ltd</option>
            <option value="PALMPAY">PALMPAY</option>
            <option value="Paga">Paga</option>
            <option value="Page Financials">Page Financials</option>
            <option value="Palmcoast Microfinance Bank">Palmcoast Microfinance Bank</option>
            <option value="Parallex Bank">Parallex Bank</option>
            <option value="Parkway Mf Bank">Parkway Mf Bank</option>
            <option value="Parkway-ReadyCash">Parkway-ReadyCash</option>
            <option value="Parralex Microfinance bank">Parralex Microfinance bank</option>
            <option value="PatrickGold Microfinance Bank">PatrickGold Microfinance Bank</option>
            <option value="PayAttitude Online">PayAttitude Online</option>
            <option value="Paycom">Paycom</option>
            <option value="Paystack Payments Limited">Paystack Payments Limited</option>
            <option value="Peace Microfinance Bank">Peace Microfinance Bank</option>
            <option value="PecanTrust Microfinance Bank">PecanTrust Microfinance Bank</option>
            <option value="Peniel Micorfinance Bank Ltd">Peniel Micorfinance Bank Ltd</option>
            <option value="Pennywise Microfinance Bank">Pennywise Microfinance Bank</option>
            <option value="Personal Trust Microfinance Bank">Personal Trust Microfinance Bank
            </option>
            <option value="Petra Microfinance Bank">Petra Microfinance Bank</option>
            <option value="Pillar Microfinance Bank">Pillar Microfinance Bank</option>
            <option value="Platinum Mortgage Bank">Platinum Mortgage Bank</option>
            <option value="Polaris bank">Polaris bank</option>
            <option value="Polyibadan Microfinance Bank">Polyibadan Microfinance Bank</option>
            <option value="Polyuwanna Microfinance Bank">Polyuwanna Microfinance Bank</option>
            <option value="Preeminent Microfinance Bank">Preeminent Microfinance Bank</option>
            <option value="PremiumTrust Bank">PremiumTrust Bank</option>
            <option value="Prestige Microfinance Bank">Prestige Microfinance Bank</option>
            <option value="Prisco  Microfinance Bank">Prisco Microfinance Bank</option>
            <option value="Pristine Divitis Microfinance Bank">Pristine Divitis Microfinance Bank
            </option>
            <option value="Projects Microfinance Bank">Projects Microfinance Bank</option>
            <option value="ProvidusBank PLC">ProvidusBank PLC</option>
            <option value="Purplemoney Microfinance Bank">Purplemoney Microfinance Bank</option>
            <option value="Qr Payments">Qr Payments</option>
            <option value="Qube Microfinance Bank Ltd">Qube Microfinance Bank Ltd</option>
            <option value="Quickfund Microfinance Bank">Quickfund Microfinance Bank</option>
            <option value="Radalpha Microfinance Bank">Radalpha Microfinance Bank</option>
            <option value="Rahama Microfinance Bank">Rahama Microfinance Bank</option>
            <option value="Rand merchant Bank">Rand merchant Bank</option>
            <option value="Refuge Mortgage Bank">Refuge Mortgage Bank</option>
            <option value="Regent Microfinance Bank">Regent Microfinance Bank</option>
            <option value="Rehoboth Microfinance Bank">Rehoboth Microfinance Bank</option>
            <option value="Reliance Microfinance Bank">Reliance Microfinance Bank</option>
            <option value="RenMoney Microfinance Bank">RenMoney Microfinance Bank</option>
            <option value="Rephidim Microfinance Bank">Rephidim Microfinance Bank</option>
            <option value="Resident Fintech Limited">Resident Fintech Limited</option>
            <option value="Richway Microfinance Bank">Richway Microfinance Bank</option>
            <option value="Rigo Microfinance Bank">Rigo Microfinance Bank</option>
            <option value="Rima Growth Pathway Microfinance Bank ">Rima Growth Pathway Microfinance
                Bank </option>
            <option value="Rima Microfinance Bank">Rima Microfinance Bank</option>
            <option value="Rockshield Microfinance Bank">Rockshield Microfinance Bank</option>
            <option value="Royal Exchange Microfinance Bank">Royal Exchange Microfinance Bank
            </option>
            <option value="Rubies Microfinance Bank">Rubies Microfinance Bank</option>
            <option value="Safe Haven MFB">Safe Haven MFB</option>
            <option value="SafeTrust ">SafeTrust </option>
            <option value="Safegate Microfinance Bank">Safegate Microfinance Bank</option>
            <option value="Sagamu Microfinance Bank">Sagamu Microfinance Bank</option>
            <option value="Sagegrey Finance Limited">Sagegrey Finance Limited</option>
            <option value="Seap Microfinance Bank">Seap Microfinance Bank</option>
            <option value="Seed Capital Microfinance Bank">Seed Capital Microfinance Bank</option>
            <option value="Seedvest Microfinance Bank">Seedvest Microfinance Bank</option>
            <option value="Shalom Microfinance Bank">Shalom Microfinance Bank</option>
            <option value="Shepherd Trust Microfinance Bank">Shepherd Trust Microfinance Bank
            </option>
            <option value="Shield Microfinance Bank Ltd">Shield Microfinance Bank Ltd</option>
            <option value="Shongom Microfinance Bank Ltd">Shongom Microfinance Bank Ltd</option>
            <option value="Sls  Mf Bank">Sls Mf Bank</option>
            <option value="Smartcash Payment Service Bank">Smartcash Payment Service Bank</option>
            <option value="Snow Microfinance Bank">Snow Microfinance Bank</option>
            <option value="Solid Allianze Microfinance Bank">Solid Allianze Microfinance Bank
            </option>
            <option value="Solidrock Microfinance Bank">Solidrock Microfinance Bank</option>
            <option value="Sparkle">Sparkle</option>
            <option value="Spay Business">Spay Business</option>
            <option value="Spectrum Microfinance Bank">Spectrum Microfinance Bank</option>
            <option value="Stanbic IBTC @ease wallet">Stanbic IBTC @ease wallet</option>
            <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
            <option value="Standard Chaterted bank PLC">Standard Chaterted bank PLC</option>
            <option value="Standard Microfinance Bank">Standard Microfinance Bank</option>
            <option value="Stanford Microfinance Bak">Stanford Microfinance Bak</option>
            <option value="Stb Mortgage Bank">Stb Mortgage Bank</option>
            <option value="Stellas Microfinance Bank">Stellas Microfinance Bank</option>
            <option value="Sterling Bank PLC">Sterling Bank PLC</option>
            <option value="Stockcorp  Microfinance Bank">Stockcorp Microfinance Bank</option>
            <option value="Sulsap Microfinance Bank">Sulsap Microfinance Bank</option>
            <option value="Sunbeam Microfinance Bank">Sunbeam Microfinance Bank</option>
            <option value="Suntrust Bank">Suntrust Bank</option>
            <option value="Support Mf Bank">Support Mf Bank</option>
            <option value="Supreme Microfinance Bank Ltd">Supreme Microfinance Bank Ltd</option>
            <option value="TANADI MFB (CRUST)">TANADI MFB (CRUST)</option>
            <option value="TCF MFB">TCF MFB</option>
            <option value="TagPay">TagPay</option>
            <option value="Taj Bank Limited">Taj Bank Limited</option>
            <option value="Tajwallet">Tajwallet</option>
            <option value="Tangerine Bank">Tangerine Bank</option>
            <option value="TeamApt">TeamApt</option>
            <option value="TeasyMobile">TeasyMobile</option>
            <option value="Tf Microfinance Bank">Tf Microfinance Bank</option>
            <option value="Thrive Microfinance Bank">Thrive Microfinance Bank</option>
            <option value="Titan Trust Bank">Titan Trust Bank</option>
            <option value="Titan-Paystack">Titan-Paystack</option>
            <option value="Trident Microfinance Bank">Trident Microfinance Bank</option>
            <option value="Triple A Microfinance Bank">Triple A Microfinance Bank</option>
            <option value="Trust Microfinance Bank">Trust Microfinance Bank</option>
            <option value="Trustbond Mortgage Bank">Trustbond Mortgage Bank</option>
            <option value="Trustfund Microfinance Bank">Trustfund Microfinance Bank</option>
            <option value="U And C Microfinance Bank">U And C Microfinance Bank</option>
            <option value="UNN MFB">UNN MFB</option>
            <option value="Uda Microfinance Bank">Uda Microfinance Bank</option>
            <option value="Uhuru Microfinance Bank">Uhuru Microfinance Bank</option>
            <option value="Umuchinemere Procredit Microfinance Bank">Umuchinemere Procredit
                Microfinance Bank</option>
            <option value="Umunnachi Microfinance Bank">Umunnachi Microfinance Bank</option>
            <option value="Unaab Microfinance Bank">Unaab Microfinance Bank</option>
            <option value="Uniben Microfinance Bank">Uniben Microfinance Bank</option>
            <option value="Unical Microfinance Bank">Unical Microfinance Bank</option>
            <option value="Uniibadan Microfinance Bank">Uniibadan Microfinance Bank</option>
            <option value="Unilag  Microfinance Bank">Unilag Microfinance Bank</option>
            <option value="Unilorin Microfinance Bank">Unilorin Microfinance Bank</option>
            <option value="Unimaid Microfinance Bank">Unimaid Microfinance Bank</option>
            <option value="Union Bank PLC">Union Bank PLC</option>
            <option value="United Bank for Africa">United Bank for Africa</option>
            <option value="Unity Bank PLC">Unity Bank PLC</option>
            <option value="Uniuyo Microfinance Bank">Uniuyo Microfinance Bank</option>
            <option value="Uzondu Mf Bank">Uzondu Mf Bank</option>
            <option value="VFD Micro Finance Bank">VFD Micro Finance Bank</option>
            <option value="VTNetworks">VTNetworks</option>
            <option value="Vas2Nets Limited">Vas2Nets Limited</option>
            <option value="Verdant Microfinance Bank">Verdant Microfinance Bank</option>
            <option value="Verite Microfinance Bank">Verite Microfinance Bank</option>
            <option value="Virtue Microfinance Bank">Virtue Microfinance Bank</option>
            <option value="Visa Microfinance Bank">Visa Microfinance Bank</option>
            <option value="Wema Bank PLC">Wema Bank PLC</option>
            <option value="Wetland Microfinance Bank">Wetland Microfinance Bank</option>
            <option value="Winview Bank">Winview Bank</option>
            <option value="Woven Finance">Woven Finance</option>
            <option value="Xpress Payments">Xpress Payments</option>
            <option value="Xslnce Microfinance Bank">Xslnce Microfinance Bank</option>
            <option value="Yct Microfinance Bank">Yct Microfinance Bank</option>
            <option value="Yello Digital Financial Services">Yello Digital Financial Services
            </option>
            <option value="Yes Microfinance Bank">Yes Microfinance Bank</option>
            <option value="Yobe Microfinance Bank">Yobe Microfinance Bank</option>
            <option value="Zenith bank PLC">Zenith bank PLC</option>
            <option value="ZenithMobile">ZenithMobile</option>
            <option value="Zikora Microfinance Bank">Zikora Microfinance Bank</option>
            <option value="Zinternet Nigera Limited">Zinternet Nigera Limited</option>
            <option value="Zwallet">Zwallet</option>
            <option value="e-Barcs Microfinance Bank">e-Barcs Microfinance Bank</option>
            <option value="eTranzact">eTranzact</option>
        </select>

    </div>



    <div class="relative">

        <label class="pb-1 text-gradient-100 block text-xs tracking-normal font-semibold" for="account_no">Depositor&#39;s
            Account No</label>
        <input class="block w-full text-xs text-gray-700 px-1 py-4 h-12  border-b border-0 border-gray-300 bg-transparent
    focus:ring-0 ring-0 font-medium focus:outline-none" id="account_no" inputmode="numeric" name="account_no" required
            type="text">


    </div>






    <div class="relative">

        <label class="pb-1 text-gradient-100 block text-xs tracking-normal font-semibold" for="account_name">Depositor&#39;s
            Account Name</label>
        <input class="block w-full text-xs text-gradient-100 px-1 py-4 h-12  border-b border-0 border-gray-300 bg-transparent
            focus:ring-0 ring-0 font-medium focus:outline-none" name="account_name" required type="text"
            wire:model="account_name ">


    </div>






    <div class="relative">

        <label class="pb-1 text-gradient-100 block text-xs tracking-normal font-semibold" for="proof">Proof of
            payment</label>
        <input class="block w-full text-xs text-gradient-100 px-1 py-4 h-12  border-b border-0 border-gray-300 bg-transparent
            focus:ring-0 ring-0 font-medium focus:outline-none" id="proof" name="proof" required type="file"
            wire:model="proof">


    </div>


    <input type="hidden" name="plan_id" id="plan_id" value="{{ $plan->id }}" wire:model="plan_id">



    <div class="relative">
        <button class="h-12 rounded-full text-white flex w-full tracking-normal  items-center justify-center box-content py-1
            focus:ring-4 focus:outline-none outline-none focus:ring-opacity-50 mx-auto font-semibold btn" style="background-color: rgb(105, 199, 217);"
            type="submit">Submit</button>
    </div>


</form>
