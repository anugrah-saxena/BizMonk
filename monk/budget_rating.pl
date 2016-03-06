:-dynamic size_list/2.

%/main rating fucntions starts here/
budget_rating(Scale, Market, Country, Budget):-
nl,write('CALLING FUNCTION BUDGET RATING .....'),nl,write('Rating your budget according to Industry competitors :'),
findall(Name,company(Name,_,Scale,Market,Country,_),Bag),nl,nl,
size_list(Bag,Size),
sum(Bag,S),
Avg is S/Size,																						 %/color
maximum(Bag,Mx),
min(Bag,Mn),
partition(Mx,Mn,Avg,P1,P2),
nl,write('Partition Classes are :  '),nl,write(Mn),nl,write(P1),nl,write(Avg),nl,write(P2),nl,write(Mx),
tell('budget_rating_graph.txt'),write('Minimum'),nl,write(Mn),nl,write('MinAvg'),nl,write(P1),nl,write('Average'),nl,write(Avg),nl,write('MyBudget'),nl,write(Budget),nl,write('AvgMax'),nl,write(P2),nl,write('Maximum'),nl,write(Mx),nl,told,
generate_rating(Mx,Mn,Avg,P1,P2,Budget).
%/main rating fucntions ends here/

%/partiotion function starts here/
partition(Max,Min,Average,P11,P22):-
P11 is (Min+Average)/2,
P22 is (Max+Average)/2.
%/partition function ends here/


%/generate rating function starts here/
generate_rating(Max,Min,Average,P1,P2,Budget):-
nl,(Max<Budget->write('budget rating A+');P2<Budget->write('budget rating A');Average<Budget->write('budget rating B+');P1<Budget->write('budget rating B');Min<Budget->write('budget rating C');write('we have to update the budget now')).
%/generate rating function ends here/





%/Max of any list starts here/
maximum([],0).

maximum([H|T],Max):-
financial_company(H,Capital,_),
 maximum(T,Max1),
 (Capital>=Max1, Max=Capital; Capital<Max1, Max=Max1).
%/Max of any list ends here/


%/Min of any list starts here/
min([],8989890809809809808098).    %/larger no. ensure smooth functioning/

min([H|T],Min):-
financial_company(H,Capital,_),
 min(T,Min1),
 (Capital=<Min1, Min=Capital; Capital>Min1, Min=Min1).
%/Min of any list ends here/


%/size of any list is calculated here/
size_list([_|T],Size):-
size_list(T,F1),
Size is 1+F1.
size_list([],0).
%/size of any list is calculated here/



%/sum of a list starts here/
sum([],0).

sum([H|T],N):-
financial_company(H,Capital,_),
sum(T,N2),
N is Capital+N2.
%/Sum of list ends here/



p:-
consult('data_all'),
budget_rating(ssi,websites,india,34000).