%/city  hours average per year    rating acc water    rating transport    airport     metro    modernisation/
facts_city(jaipur,20,60,bplus,semi_international,proposed,75).
facts_city(delhi,22,78,a,international,yes,90).
facts_city(mumbai,18,75,aplus,international,yes,95).
facts_city(hyderabad,21,65,a,international,no,85).
facts_city(noida,16,75,b,no,no,65).


q:-
tell('city_basic_amenities_graph.txt'),told,
r(product_based,[jaipur,delhi,mumbai,hyderabad]).


r(_,[]).

r(Type,[H|T]):-
city_analysis(Type,H),
r(Type,T).






city_analysis(Type,City):-
facts_city(City,Electricity,W_point,Transport,Airport,Metro,Modern_point),
E_point is (Electricity/24)*100,
(Transport==aplus ->(T_point=10);Transport==a->(T_point=9);Transport==bplus ->(T_point=7);Transport==b ->(T_point=6);Transport==c ->(T_point=4)),
(Airport==international ->(A_point=10);Airport==semi_international ->(A_point=8);Airport==domestic ->(A_point=5);Airport==proposed ->(A_point=2);Airport==no ->(A_point=0)),
(Metro==yes ->(M_point=10);Metro==proposed ->(M_point=4);Metro==no ->(M_point=0)),


append('city_basic_amenities_graph.txt'),write(City),nl,write('electricity_point'),nl,write(E_point),nl,write('water_point'),nl,write(W_point),nl,write('transport_point'),nl,write(T_point),nl,write('airport_point'),nl,write(A_point),nl,write('metro_point'),nl,write(M_point),nl,write('modern_point'),nl,write(Modern_point),nl,told,

nl,nl,write('ANALYZING BASIC AMENITIES OF CITY : '),write(City),
nl,write('Caclulated ELECTRICITY points :'),write(E_point),
nl,write('Caclulated WATER SUPPLY points :'),write(W_point),
nl,write('Caclulated CITY TRANSPORT points :'),write(T_point),
nl,write('Caclulated AIRPORT FACILTIES points :'),write(A_point),
nl,write('Caclulated METRO FACILITIES points :'),write(M_point),
nl,write('Caclulated CITY MORDERNIZATION points :'),write(Modern_point),
City_finalpoint is (0.8*E_point+1.2*W_point+10*T_point+0.5*10*A_point+M_point*10*1.8+Modern_point*2.5)/7.8,
nl,write('Caclulated FINAL AMENITIES points are:'),write(City_finalpoint),nl,nl,
append('output_amenities.pl'),write('output_amenities('),write(City),write(','),write(City_finalpoint),write(').'),nl,told.


 



%STAFF :-
%labour_skill
%labour_cost
%skilled_graduates vs cost
%managers 
%engineers
%workers   even presence of good engneering n managment college's increase the point

%future :-
%polpulation growth rate> high then in future high labour
%literacy growth rate > high then future skilled graduates
 
%Other factors -> metro proposed , Sez proposed , foreign investment proposed 


%basic amenities (electricity , water , transport , airport , metro  , malls n all that  even go for city rating by a firm).

