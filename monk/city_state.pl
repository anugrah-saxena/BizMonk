state([jaipur,ajmer,jodhpur],rajasthan).
state([delhi,noida,gurgaon],ncr).
state([bangalore],karnataka).





%/BUSINESS FAVORABLE SATEWISE/
%/product based     services      IT/
business_favorable(rajasthan,72,90,43).
business_favorable(ncr,80,95,82).
business_favorable(karnataka,83,79,96).



%/ENVIRONMENT LAWS   high means good/  
env(rajasthan,85).
env(ncr,44).
env(karnataka,68).

%/STATE POLITICAL STABILITY   high means good/  
state_stability(rajasthan,70).
state_stability(ncr,96).
state_stability(karnataka,87).

%/DO SAME FOR ALL PRODUCT/