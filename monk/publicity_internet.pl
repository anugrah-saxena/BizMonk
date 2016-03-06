%/likes facts start/
net(kids,_,[zapakgames_com,miniclip_com]).
net(teens,_,[songs_pk,watchseries_eu,gmail,facebook]).
net(college_student,male,[gmail,facebook,songs_pk]).
net(college_student,female,[gmail,facebook,songs_pk,cookinglesson_in]).
net(working,_,[gmail,facebook,flipkart]).
net(housewife,_,[facebook,cookinglesson_in,hobbylearn_uk]).
%/likes facts ends/



%/pricing facts starts   Price IN INR\per add feet & VIEWERSHIP IN LAKHS/
stats(zapakgames_com,6000,0.5).
stats(miniclip_com,18000,6).
stats(songs_pk,4000,1).
stats(watchseries_eu,2500,0.7).
stats(gmail,400000,100).
stats(facebook,80000,200).
stats(flipkart,20000,70).
stats(cookinglesson_in,50000,10).
stats(hobbylearn_uk,11000,2).
%/pricing facts ends/






q:-
main([kids,teens,housewife],female,M,N,34000),!,write(M),nl,write(N).   %/this cut ensure I wont look for alternatives from result of this function./



main(List,Sex,Total,Nodub,Money):-
multiads(List,Sex,Total),
remove_duplicates(Total,Nodub),
algorithm(Nodub,Total,0,_,Money).





algorithm([],_,A,N,M):-
write('OUR SOFTWARE HIGHLY RECOMMENDS WEBSITE :   '),write(N),write(' WITH SCORE POINT:   '),write(A),nl,nl,nl.

algorithm([H|T],Total,A,Name,Money):-
stats(H,Price,Viewer),
Product is (Viewer*100000)/Price,
count(H,Total,N),
Product2 is Product*N*N,nl,
Product2>A,
nl,write('Per minute Price of the website  '),write(H),write( '   is :'),write(Price),
nl,write('Number of Viewers of the website  '),write(H),write( '  is :'),write(Viewer),
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
nl,write('Per minute Price of the website  '),write(H),write( '   is :'),write(Price),
nl,write('Number of Viewers of the website  '),write(H),write( '  is :'),write(Viewer),
nl,write('Basic Calculated Points are :'),write(Product),
nl,write('magnifying factor is :'),write(N),
nl,write('Final Calculated Points are :'),write(Product2),
nl,nl,nl,
algorithm(T,Total,A,Name,Money).


multiads([],_,[]).

multiads([H|T],Sex,M):-
adv_net(H,Sex,M1),nl,write(H),nl,write(T),nl,
multiads(T,Sex,M2),
append(M1,M2,M).



adv_net(Agegrp,Sex,Channel):-
net(Agegrp,Sex,C),write(C),append(C,[],Channel),nl.




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