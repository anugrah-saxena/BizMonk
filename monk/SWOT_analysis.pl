%/Facts section here/
%/NAME  ORIGIN  SCALE  CAPITAL  PRODUCT_CATEGORY  PRODUCT  PRICING   WORKCULTURE  BRAND_NAME  CUSTOMER_TRUST  EXPERIENCE   START_COUNTRY  START_CITY        /
company(maruti, india, lsi, high, consumer_based,cars,low,poor,95,98,33,india,jaipur).
company(hyundai, south_korea, lsi, high ,consumer_based,cars,medium,average,90,80,12,india,jaipur).

company(lux, india, lsi, high, consumer_based,soap,medium,good,95,90,18,india,jaipur).
company(dove, germany, lsi, high ,consumer_based,soap,high,excellent,80,95,8,india,jaipur).




swot(Name):-
consult(text),
((company(Name,Origin,Scale,Capital,Category,Product,Price,Culture,Brand,Trust,Exp,Country,City))->strength(Name,Origin,Scale,Capital,Category,Product,Price,Culture,Brand,Trust,Exp,Country,City);write('no')).



strength(Name,Origin,Scale,Capital,Category,Product,Price,Culture,Brand,Trust,Exp,Country,City):-   %/always write in lower case/
nl,nl,nl,write('################'),write('STRENGHT'),write('###################'),nl,nl,
nl,((Origin==Country)->(locale(L),write(L));(international(L),write(L))),
nl,((Scale==lsi)->(lsi(K),write(K));(Scale==msi)->(msi(K),write(K));(Scale==ssi)->(ssi(K),write(K))),
nl,((Capital==high)->(high_capital(M),write(M));(Capital==medium)->(medium_capital(M),write(M))).







%/ask funtion start here/
ask(V):-
nl,write(V), 
write('? : '),
read(Y), 
Y == yes.
%/ask funtion end here/



