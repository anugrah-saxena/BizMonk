%/FACTS   CITY   POPULATION 2001   2011   LITERACY  2001 2011 LABOUR_SKILL_POINT  LABOUR_COST/   Tech no. skill cost   management/
population(jaipur,23,31.3,65,73,8,55,2900,1.5,56,20000,0.74,44,30000).
population(delhi,128,180,75,81,20,75,6100,6.5,86,40000,4.3,84,65000).
population(hyderabad,30.6,45.3,76,82,7,70,4500,3.5,88,45000,4.1,84,66000).
population(mumbai,156,212,71,82,33,78,8000,10,76,45000,8,83,65000).
population(noida,4.5,6.9,74,83,1,71,4100,0.75,76,35000,0.45,78,40000).
population(goa,2,3.1,74,83,0.3,60,4100,0.15,76,35000,0.1,68,40000).
%/                               ^labour    /

hr_city(City,Type):-
nl,nl,nl,write('##################'),
nl,write(City),
nl,write('##################'),nl,nl,
population(City,P1,P2,L1,L2,Lab_P,Lab_S,Lab_C,Tech_P,Tech_S,Tech_C,Mang_P,Mang_S,Mang_C),
P_growth is (100*(P2-P1)/P1),
nl,write('Population growth rate for '),write(City),write(' is '),write(P_growth),
L_growth is (100*(L2-L1)/L1),
nl,write('Literacy growth rate for '),write(City),write(' is '),write(L_growth),
nl,write('Current polpulation in lakhs of city :'),write(City),write('   is '),write(P2),
nl,write('Current Literacy  of city :'),write(City),write('   is '),write(L2),nl,nl,

nl,write('Labour  Population of city :'),write(City),write('   is '),write(Lab_P),
nl,write('Labour  Skill      of city :'),write(City),write('   is '),write(Lab_S),
nl,write('labour  Cost       of city :'),write(City),write('   is '),write(Lab_C),
Lab_Factor is 1000*(Lab_S)/Lab_C,
nl,nl,write('************'),
nl,write('Calculated Skill cost factor for Labour staff is :'),write(Lab_Factor),
Lab_Final is (Lab_Factor*3+Lab_P)/20,
nl,write('Final system generated vaule for Labour in city'),write(City),write(' is '),write(Lab_Final),
nl,write('************'),

nl,write('Tech Graduate Population of city :'),write(City),write('   is '),write(Tech_P),
nl,write('Tech Graduate Skill      of city :'),write(City),write('   is '),write(Tech_S),
nl,write('Tech Graduate Cost       of city :'),write(City),write('   is '),write(Tech_C),
Tech_Factor is 1000*(Tech_S)/Tech_C,
nl,write('************'),
nl,write('Calculated Skill cost factor for Tech staff is :'),write(Tech_Factor),
Tech_Final is (Tech_Factor*3+Tech_P)/4,
nl,write('Final system generated vaule for Tech Satff in city   :'),write(City),write(' is '),write(Tech_Final),
nl,write('************'),

nl,write('Management Graduate      Population of city :'),write(City),write('   is '),write(Mang_P),
nl,write('Management Graduate      Skill      of city :'),write(City),write('   is '),write(Mang_S),
nl,write('Management Graduate      Cost       of city :'),write(City),write('   is '),write(Mang_C),
Mang_Factor is 1000*(Mang_S)/Mang_C,
nl,write('************'),
nl,write('Calculated Skill cost factor for management staff is :'),write(Mang_Factor),
Mang_Final is 1.5*(Mang_Factor*3+Mang_P)/4,
nl,write('Final system generated vaule for Management Staff in city  :'),write(City),write(' is   '),write(Mang_Final),
nl,write('************'),
append('staff_skill_analysis_graph.txt'),write(City),nl,write(Lab_S),nl,write(Tech_S),nl,write(Mang_S),nl,told,
append('city_hr_resource_analysis_graph.txt'),write(City),nl,write(Lab_Final),nl,write(Tech_Final),nl,write(Mang_Final),nl,told,
(Type==product_based ->(staff_manufacture(City,Lab_Final,Tech_Final,Mang_Final));Type==services ->(staff_services(City,Lab_Final,Tech_Final,Mang_Final));Type==software ->(staff_software(City,Lab_Final,Tech_Final,Mang_Final))).



staff_manufacture(City,Lab_Final,Tech_Final,Mang_Final):-
nl,nl,nl,write('Final Recommendation section : Product based : Manufacture Industry'),nl,
Final_M is (4*Lab_Final+2*Tech_Final+Mang_Final)/7,
nl,nl,nl,write('FINAL STAFF SYSTEM GENERATED POINTS ARE  :'),write(City),write('    '),write(Final_M),nl,nl,nl,
append('city_hr_final_graph.txt'),write(City),nl,write(Final_M),nl,told,
append('output_hr.pl'),write('output_hr('),write(City),write(','),write(Final_M),write(').'),nl,told.


staff_services(City,Lab_Final,Tech_Final,Mang_Final):-
nl,nl,nl,write('Final Recommendation section : Services based :'),nl,
Final_S is (0.5*Lab_Final+1*Tech_Final+0.75*Mang_Final)/2.25,
nl,nl,nl,write('FINAL STAFF SYSTEM GENERATED POINTS ARE  :'),write(City),write('    '),write(Final_S),nl,nl,nl,
append('city_hr_final_graph.txt'),write(City),nl,write(Final_S),nl,told,
append('output_hr.pl'),write('output_hr('),write(City),write(','),write(Final_S),write(').'),nl,told.

staff_software(City,Lab_Final,Tech_Final,Mang_Final):-
nl,nl,nl,write('Final Recommendation section : Software'),nl,
Final_Sw is (0.01*Lab_Final+5*Tech_Final+1*Mang_Final)/6.01,
write('FINAL STAFF SYSTEM GENERATED POINTS ARE    :'),write(City),write('    '),write(Final_Sw),nl,nl,nl,
append('city_hr_final_graph.txt'),write(City),nl,write(Final_Sw),nl,told,
append('output_hr.pl'),write('output_hr('),write(City),write(','),write(Final_Sw),write(').'),nl,told.




r:-
tell('city_hr_resource_analysis_graph.txt'),told,
tell('city_hr_final_graph.txt'),told,
tell('staff_skill_analysis_graph.txt'),told,
tell('Hr.txt'),
q([jaipur,delhi],software),
told.


q([],_).

q([H|T],Type):-
hr_city(H,Type),
q(T,Type).









%future :-
%polpulation growth rate> high then in future high labour
%literacy growth rate > high then future skilled graduates
 
%Other factors -> metro proposed , Sez proposed , foreign investment proposed 


%basic amenities (electricity , water , transport , airport , metro  , malls n all that  even go for city rating by a firm).

