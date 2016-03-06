city_future(City,Type):-
consult(city_human_resource_analysis),
population(City,P1,P2,L1,L2,_,_,_,_,_,_,_,_,_),
P_growth is (100*(P2-P1)/P1),
L_growth is (100*(L2-L1)/L1),
(Type==product_based ->(future_manufacture(City,P_growth,L_growth));Type==services ->(future_services(City,P_growth,L_growth));Type==software ->(future_software(City,P_growth,L_growth))).


future_manufacture(City,P_growth,L_growth):-
nl,write(P_growth),
nl,write(L_growth).

future_services(City,P_growth,L_growth):-
nl,write(P_growth),
nl,write(L_growth).

future_software(City,P_growth,L_growth):-
nl,write(P_growth),
nl,write(L_growth).



l:-
o([jaipur,mumbai,hyderabad,noida,delhi],services).


o([],_).

o([H|T],Type):-
city_future(H,Type),
o(T,Type).
