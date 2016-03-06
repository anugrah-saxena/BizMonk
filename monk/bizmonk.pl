:-dynamic sizelist1/2.



%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/COIDING START HERE/%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%






feasiblity(Name,Type,Scale,Budget,Market,Country,City) :-
%/consult(publicity_tv),hola,/
consult('data_all'),
tell('Competition_Financial_Rating.txt'),  write('COMPETITION FINANCIAL RATING'),nl,nl,told,
tell('Competition_Credibility_Rating.txt'),  write('COMPETITION CREDIBILITY RATING'),nl,nl,told,
tell('tophp.txt'),told,
tell('tophp2.txt'),told,
%/insert in report.txt file/
tell('report.txt'),
write('FEASIBILITY STUDY'),nl,
write('Generated by BIZ - MO v1.0'),nl,
told,
write('You Entered / Changed to the following Values'),nl,write(Name),nl,write(Type),nl,write(Scale),nl,write(Budget),nl,write(Market),nl,write(Country),nl,write(City),nl,
asserta(c_name(Name)),
asserta(c_type(Type)),
asserta(c_scale(Scale)),
asserta(c_budget(Budget)),
asserta(c_market(Market)),
asserta(c_country(Country)),
asserta(c_city(City)),

%/functions for feasiblity/
checkprevious(Name,Country),      
ecofeasiblity(Type,Scale,Market,Country,City).
%/functions for feasiblity ends here/

%/previous functions/
checkprevious(Name,Country) :-
nl,write('CALLING FUNCTION CHECK PREVIOUS CHECK .....'),nl,
(company(Name,_,_,_,Country,_)->nl,nl,branch(Country);new(Country)),
nl,write('LEAVING FUNCTION CHECK PREVIOUS CHECK .....'),nl.
%/previous  functions end here/


%/branch functions/
branch(C):-
nl,write('CALLING FUNCTION CHECK BRANCH....'),nl,
write('Are you  looking for a branch in '),
ask(C)->(write('YOU ARE ALLOWED TO PROCEED WITH SYSTEM .......')),nl;(write('sorry company already exist EXITING SYSTEM .......'),changecountry),
nl,write('LEAVING FUNCTION CHECK BRANCH.....'),nl.
%/branch functions end here/

%/Change Country from here/
changecountry :-
nl,write('CHANGING YOUR COUNTRY.....'),nl,
write('please enter the name of updated country'),write(':'),
read(CC),write(CC),
retract(c_country(_)),
asserta(c_country(CC)),
nl,write('Updating System...'),nl,write('Restarting study ....'),nl,
nl,write(' YOUR COUNTRY HAS BEEN UPDATED ........... SYSTEM RESTARTING.....'),nl,change.
%/Change Country end here Since country is changing City must be changed/



%/Change City/
change :-
nl,write('CHANGING YOUR CITY.....'),nl,
write('Please Enter the name of update city'),write(':'),
read(CT),
retract(c_city(_)),
asserta(c_city(CT)),
c_name(N),                                       %/this simply implies that the name comes in asserted value of c_name comes in N/
c_type(T),
c_scale(S),
c_budget(B),
c_market(M),
c_country(CC),write(CC),
nl,write('Updating System...'),nl,write('Restarting study ....'),nl,
nl,write(' YOUR CITY HAS BEEN UPDATED ........... SYSTEM RESTARTING.....'),nl,
feasiblity(N,T,S,B,M,CC,CT),break.   % /break ensure me no looping wow yipee!/ . 
%/Change City/

%/new functions/
new(C):-
nl,write('CALLING FUNCTION NEW .....'),nl,
write('CHECKING COUNTRY :'),write(C),nl,write('LEAVING FUNCTION NEW .....'),nl.
%/new functions end here/

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%?/NAME CHECKING LOOP ENDS HERE/%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%






%/budget update functions/
updatebudget(T,C,S) :-
nl,write('CALLING FUNCTION  UPDATE BUDGET.....'),nl,
nl,write('Your Budget is not satisfactory for given location please update it'), 
read(NB),
retract(c_budget(_)),
asserta(c_budget(NB)),
checkbudget(T,C,S,NB),
nl,write('CALLING FUNCTION UPDATE BUDGET.....'),nl.
%/budget  update functions end here/










%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/CODING SECTION ENDS HERE/%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

%/size of any list is calculated here/
sizelist1([_|T],Size):-
sizelist1(T,F1),
Size is 1+F1.
sizelist1([],0).
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