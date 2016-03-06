%/CLASSIFY EVERYTHING IN 2 PARTS OFFICE & MANUFACTURE BEFORE QUERY PUT IT INTO CLASS/

location_finder(City,Req_area,Max_budget,Class):-
tell('city_location_finder_graph.txt'),told,
consult(city_location_facts),

(Req_area>300->(Diff1 is Req_area-300);(Diff1=0)),
Diff2 is Req_area+300,


(Req_area>1000->(Diff1_M is Req_area-1000);(Diff1_M=0)),
Diff2_M is Req_area+1000,

(Class==office->get_location_office(City,Diff1,Diff2,Max_budget);Class==manufacture->get_location_manufacture(City,Diff1_M,Diff2_M,Max_budget)).


%/OFFICE/
get_location_office(City,Diff1,Diff2,Max_budget):-
findall(Code,(office_area(City,Code,Area,Rating,Cost,Avail),Avail==yes,Cost<Max_budget,Diff1<Area,Area<Diff2),Bag),
write(Bag),
make_graph_office(Bag).

%/MAKE GRAPH OFFICE/
make_graph_office([]).

make_graph_office([H|T]):-
office_building(List,T_name,_,T_rating,A_dis,S_dis,B_dis),member(H,List),

office_area(_,H,Area,B_rating,Cost,_),

append('city_location_finder_graph.txt'),write(T_name),nl,write(H),nl,write('building_rating'),nl,write(B_rating),nl,write('building_cost'),nl,write(Cost),nl,write('building_area'),nl,write(Area),nl,write('area_rating'),nl,write(T_rating),nl,write('airport_dis'),nl,write(A_dis),nl,write('train_dis'),nl,write(S_dis),nl,write('busdepot_dis'),nl,write(B_dis),nl,told,
nl,nl,write('####################'),nl,nl,
nl,write('The Building Name is '),write(T_name),
nl,write('The Building code is '),write(H),nl,
nl,write('The building rating is '),write(B_rating),
nl,write('The building cost is '),write(Cost),
nl,write('The building area available is '),write(Area),

nl,write('The area rating is'),write(T_rating),
nl,write('The area airport distance is'),write(A_dis),
nl,write('The area station distance is'),write(S_dis),
nl,write('The area bustransport distance is'),write(B_dis),

make_graph_office(T).











%/MANUFACTURE/
get_location_manufacture(City,Diff1_M,Diff2_M,Max_budget):-
nl,write(City),
nl,write(Diff1_M),
nl,write(Diff2_M),
nl,write(Max_budget),


findall(Code,(manufacture_location(City,Code,Area,Cost,Avail),Avail==yes,Cost<Max_budget,Diff1_M<Area,Area<Diff2_M),Bag_M),
write(Bag_M),
make_graph_manufacture(Bag_M).



%/MAKE GRAPH MANUFACTURE/
make_graph_manufacture([]).

make_graph_manufacture([H|T]):-
manufacture_area(List,M_name,_,M_rating),member(H,List),

manufacture_location(_,H,Area,Cost,_),

append('city_location_finder_graph.txt'),write(M_name),nl,write(H),nl,write('building_rating'),nl,write(B_rating),nl,write('building_cost'),nl,write(Cost),nl,write('building_area'),nl,write(Area),nl,write('area_rating'),nl,write(T_rating),nl,write('airport_dis'),nl,write(A_dis),nl,write('train_dis'),nl,write(S_dis),nl,write('busdepot_dis'),nl,write(B_dis),nl,told,
nl,nl,write('####################'),nl,nl,
nl,write('The AREA NAME IS  '),write(M_name),
nl,write('The AREA code is '),write(H),nl,
nl,write('The AREA rating is '),write(M_rating),
nl,write('The AREA cost is '),write(Cost),
nl,write('The AREA area available is '),write(Area),

nl,write('The Location rating is'),write(M_rating),


make_graph_manufacture(T).





