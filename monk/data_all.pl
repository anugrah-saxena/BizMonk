%/facts section here/
company(reil, it, ssi, websites, india ,jaipur).
company(girnar, it, ssi, websites, india, bangalore).
company(rajcom, it, msi, websites, india, bangalore).
company(godaddy,it,lsi,websites,india,bangalore).
company(c,it,lsi,market,india,bangalore).
company(d,it,ssi,market,india,delhi).
company(e,it,msi,market,india,delhi).
company(f,it,lsi,market,india,delhi).
company(f1,it,lsi,market,india,delhi).
company(f0,it,lsi,market,india,delhi).
company(g,it,ssi,market,bangladesh,dhaka).
company(g1,it,ssi,market,bangladesh,dhaka).
company(h,it,msi,market,bangladesh,dhaka).
company(i,it,lsi,market,bangladesh,dhaka).


%/company financial condition starts in dollars & growth rate/
financial_company(reil,55000,1).
financial_company(girnar,5000,15.5).
financial_company(rajcom,30000,1.5).
financial_company(godaddy,45200,3.5).

%/company credibility condition  in functional years & reputation score of 100 according to   Sources: Harris Interactive /
credibility_company(reil,10,63).
credibility_company(girnar,3,45).
credibility_company(rajcom,20,80).
credibility_company(godaddy,10,50).

%/Threshold Budget /
budget(it, india, ssi, 3000).
budget(it, india, msi, 6000).
budget(it, india, lsi, 9000).
budget(manufacture, india, ssi, 10000).
budget(manufacture, india, msi, 30000).
budget(manufacture, india, lsi, 50000).

budget(it, bangladesh, ssi, 1000).
budget(it, bangladesh, msi, 3000).
budget(it, bangladesh, lsi, 5000).
budget(manufacture, bangladesh, ssi, 2500).
budget(manufacture, bangladesh, msi, 4000).
budget(manufacture, bangladesh, lsi, 6000).

%/city(city , country, per capita,airport)./
city(jaipur, india, 1000, yes).
city(delhi, india, 6000, yes).
city(bangalore, india, 3000, no).
city(noida, india, 7000, no).
city(chennai, india, 5000, yes).

city(dhaka, bangladesh, 7000, no).
city(mirpur, bangladesh, 4000, no).

nearairport(bangalore, 100).
nearairport(noida, 45).

nearairport(dhaka, 70).

metro(delhi).
metro(bangalore).
metro(chennai).

metro(dhaka).

%/ sentence section starts here/
print_metro('Rating of City on basis of Facilties  is '). 
print_income('Rating of City on basis of Per Capita Income is ').
%/ sentence section ends here/



%/facts section ends here/