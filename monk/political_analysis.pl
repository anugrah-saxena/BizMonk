%/United Nations Conference on Trade and Development  2011/
%/http://foreigntrade.alumnieeni.com/  source/


q:-
k(ssi,software,india,[jaipur,delhi,noida]).


k(Scale,Type,Country,[]).


k(Scale,Type,Country,[H|T]):-
 political_algo(Scale,Type,Country,H),
 k(Scale,Type,Country,T).
 


%/COUNTRY WISE POLICY/
%/govt type  &  political stability , gdp/
govt_type(us,capitalist,87,12.410).
govt_type(uk,socialist,83,1.869).
govt_type(india,socialist,73,3.699).
govt_type(bangladesh,socialist,76,1.008).
govt_type(china,communist,98,8.182).

fdi(us,2093050).
fdi(uk,1347688).
fdi(india,76226).
fdi(bangladesh,4404).
%/COUNTRY WISE POLICY/


%/STATE WISE POLICY/
state_policy(rajasthan,78).   %/someone has to work on facts authentic/
state_policy(ncr,94).
state_policy(karnataka,83).
%/STATE WISE POLICY/



%/MAIN CODE HERE/
political_algo(Scale,Type,Country,City):-
findall(Value,fdi(_,Value),Bag),
max(Bag,Maxfdi),
fdi(Country,Ourvalue),
Pointfdi is (Ourvalue/Maxfdi)*100,      %/color/


govt_type(Country,Gov_policy,Point_stability,Ourgdp),
(Gov_policy==capitalist->(P_policy=10);Gov_policy==socialist->(P_policy=7);Gov_policy==communist->(P_policy=3)),


findall(Gdp,govt_type(_,_,_,Gdp),Bag1),
max(Bag1,Maxgdp),
Pointgdp is (Ourgdp/Maxgdp)*100,              %/color/
nl,write('Caclulated FDI points :'),write(Pointfdi),
nl,write('Caclulated GDP points :'),write(Pointgdp),
nl,write('Caclulated POLITICAL STABILITY points :'),write(Point_stability),
nl,write('Caclulated COUNTRY POLICY points :'),write(P_policy),
Finalpoint is (0.05*Pointfdi+0.5*Pointgdp+Point_stability+1.5*P_policy*10)/3.05,
nl,write('Caclulated FINAL COUNTRY points are:'),write(Finalpoint),nl,nl,



%/STATE CLACULATION BEGINS HERE/
findstate(City,State),
nl,write('City :'),write(City),nl,write('State :'),write(State),
business_favorable(State,Product,Service,It),
(Type==product_based->(Fav_point=Product);Type==services->(Fav_point=Service);Type==software->(Fav_point=It)),
env(State,Env_point),
state_stability(State,State_Stability_point),
nl,write('Caclulated STATE BUSINESS FAVORABILITY points :'),write(Fav_point),
nl,write('Caclulated ENVIRONMENT STRICTNESS  points :'),write(Env_point),
nl,write('Caclulated STATE POLITICAL STATBILITY points :'),write(State_Stability_point),

Finalpoint2 is (Fav_point+2*Env_point+3*State_Stability_point)/6,
nl,write('Caclulated FINAL CITY STATE points are:'),write(Finalpoint2),nl,nl,nl,nl,
append('output_political.pl'),write('output_political('),write(City),write(','),write(Finalpoint2),write(').'),nl,told.


%/MAIN CODE HERE/




%/function to get the state here/
findstate(City,State):-
consult(city_state),
state(List,State),
member(City,List).
%/function to get the state ends here/


%affects lsi most msi average ssi minimum
% go for states gujrat.
 %look for SEZ here
 %look for previous industries here

%political_stability.
%ideology_of_govt_in_power
%imports and exports
%inflow of foreign capita


%/Max of any list starts here/
max([],0).

max([H|T],Max):-
 max(T,Max1),
 (H>=Max1, Max=H; H<Max1, Max=Max1).
%/Max of any list ends here/
