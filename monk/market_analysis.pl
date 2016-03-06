%/PRODUCT _BASED STARTS HERE/
product_type([soap,oil,shampoo,perfume,powder,facewash,cream,bodylotion],cosmetic).
product_type([buscuit,chocolate,icecream,softdrink,snacks,chips,wheat,rice,pulses],processed_food).
product_type([tv,refrigerator,washingmachine,fan,cooler,ac,heater],electronics).
product_type([insulin,medical_equipment,medicines,nutrition_drinks],pharmacy).
product_type([erp,ecommerce,banking_software,security_software],third_party_sw).
product_type([electronic_parts,mobile_parts,automobile_parts,tyres,assembly_parts],third_party_industry).
product_type([printer,cartilage,pendrive,mouse,keyboard,motherboard,cabinet,cpu_lcd,webcam,speaker,headphone,datacard],tech_hardware).
%/PRODUCT _BASED ENDS HERE/

%/SOFTWARE STARTS HERE/
product_type([antivirus,mobile_apps,media],internet).
product_type([os,drivers,user_intend],user_based).
%/SOFTWARE ENDS HERE/

%/SERVICES/
product_type([hospital,restaurant],user_intend_service).
product_type([tax_consulting,bpo,service_center],company_intend_service).





final_category([cosmetic,processed_food,pharmecy,tech_hardware,third_party_industry,electronics],product_based).
final_category([internet,third_party,user_based],software).
final_category([user_intend_service,company_intend_service],service).


transport_scheme([cosmetic,processed_food],tscheme_megastore).
transport_scheme([electronics],tscheme_electronics).
transport_scheme([third_party_sw],tscheme_teamvisit).
transport_scheme([third_party_industry],tscheme_transportproduct).
transport_scheme([internet],t_scheme_etransfer).
transport_scheme([pharmecy],t_medicalstore).
transport_scheme([user_based,tech_hardware],t_techstore).