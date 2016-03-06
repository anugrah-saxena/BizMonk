%/likes facts start/
tv(kids,_,[pogo,cn,hungama,nick]).
tv(teens,_,[starplus,v,mtv,hungama]).
tv(college_student,male,[mtv,v,satmax,starcricket]).
tv(college_student,female,[mtv,colors,fasionindia,cookindia]).
tv(working,male,[starcricket,espn,zeenews,satmax]).
tv(working,female,[fashionindia,zeenews,satmax]).
tv(working,_,[fashionindia,zeenews,satmax,espn,starcricket]).
tv(housewife,female,[colors,imagine,satmax]).
%/likes facts ends/



%/pricing facts starts   Price IN INR\per minute & VIEWERSHIP IN LAKHS/
stats(pogo,6000,0.5).
stats(cn,18000,6).
stats(hungama,4000,1).
stats(nick,2500,0.7).
stats(mtv,40000,2).
stats(v,30000,2.3).
stats(satmax,40000,4).
stats(starplus,50000,10).
stats(starcricket,11000,2).
stats(fashionindia,2000,0.3).
stats(cookindia,12000,4).
stats(espn,14000,2).
stats(zeenews,20000,8).
stats(imagine,50000,1).
stats(colors,80000,8).

%/pricing facts ends/






hola:-
main([working],female,M,N,34000),!,write(M),nl,write(N).   %/this cut ensure I wont look for alternatives from result of this function./



main(List,Sex,Total,Nodub,Money):-
multiads(List,Sex,Total),
remove_duplicates(Total,Nodub),
algorithm(Nodub,Total,0,_,Money).





algorithm([],_,A,N,M):-
write('OUR SOFTWARE HIGHLY RECOMMENDS CHANNEL :   '),write(N),write(' WITH SCORE POINT:   '),write(A),
stats(N,Price,_),
Time is M/Price,   
Time2 is Time*60,                                                                                                %/for color/
nl,write('CURRENT PRICE ALLOWS YOU TO BUY AIR TIME  IN SECONDS:'),write(Time2),nl,nl,nl.

algorithm([H|T],Total,A,Name,Money):-
stats(H,Price,Viewer),
Product is (Viewer*100000)/Price,
count(H,Total,N),
Product2 is Product*N*N,nl,
Product2>A,
%/(Money>Price->(write('Sufficient Budget2'));(write('Insufficient Budget2'))),/
nl,write('Per minute Price of the Channel  '),write(H),write( '   is :'),write(Price),
nl,write('Number of Viewers of the Channel  '),write(H),write( '  is :'),write(Viewer),
nl,write('Basic Calculated Points are :'),write(Product),
nl,write('magnifying factor is :'),write(N),
nl,write('Final Calculated Points are :'),write(Product2),
nl,nl,nl,
(Money>Price->(algorithm(T,Total,Product2,H,Money));(algorithm(T,Total,A,Name,Money))),!.



algorithm([H|T],Total,A,Name,Money):-
stats(H,Price,Viewer),
Product is (Viewer*100000)/Price,
count(H,Total,N),
Product2 is Product*N*N,nl,
Product2=<A,
nl,write('Per minute Price of the Channel  '),write(H),write( '   is :'),write(Price),
nl,write('Number of Viewers of the Channel  '),write(H),write( '  is :'),write(Viewer),
nl,write('Basic Calculated Points are :'),write(Product),
nl,write('magnifying factor is :'),write(N),
nl,write('Final Calculated Points are :'),write(Product2),
nl,nl,nl,
algorithm(T,Total,A,Name,Money).



multiads([],_,[]).

multiads([H|T],Sex,M):-
adv_tv(H,Sex,M1),nl,write(H),nl,write(T),nl,
multiads(T,Sex,M2),
append(M1,M2,M).



adv_tv(Agegrp,Sex,Channel):-
tv(Agegrp,Sex,C),write(C),append(C,[],Channel),nl.




%/remove function starts/

remove_duplicates([], []).
remove_duplicates([Head | Tail], Result) :-
member(Head, Tail), !,
remove_duplicates(Tail, Result).


remove_duplicates([Head | Tail], [Head | Result]) :-
remove_duplicates(Tail, Result).
%/remove function ends/


%/count occurance function starts here/
count(_,[],0).
count(A,[A|L],N):- !,count(A,L,N1),N is N1+1.    %/ if I dont put a cut here it will try the next same named function too resulting in many solutions/ 
count(A,[_|L],N):- count(A,L,N). 
%/count occurance function ends here/