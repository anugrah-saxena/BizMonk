%/facts section ends here/
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
%/facts section ends here/

%/ sentence section starts here/
print_metro('Rating of City on basis of Facilties  is '). 
print_income('Rating of City on basis of Per Capita Income is ').
%/ sentence section ends here/





%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/COIDING START HERE/%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
geographic_analysis(Market,)









%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/GEOGRAPHICAL FEASBILITY ENDS HERE/%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/CODING SECTION ENDS HERE/%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

%/size of any list is calculated here/
sizelist([H|T],Size):-
sizelist(T,F1),
Size is 1+F1.
sizelist([],0).
%/size of any list is calculated here/




%/ask funtion start here/
ask(V):-
nl,write(V), 
write('? : '),
read(Y), 
Y == yes.
%/ask funtion end here/




q:-
feasiblity(reil, it, msi, 10000, websites, india, jaipur).