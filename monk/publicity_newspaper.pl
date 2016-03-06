q:-
main([housewife],english,india,[jaipur,delhi]).





%/FACTS FROM DANIK BHASKAR SITE ITSELF/
%/      Name Copies   Front,magz countrypage sports  /
paper(bhaskar,hindi,india,jaipur,78,391704,5348,2431,3890,4000).
paper(patrika,hindi,india,jaipur,75,175000,4000,2000,3000,3500).
paper(timesofindia,english,india,jaipur,90,75000,3000,1000,2000,2500).
paper(thehindu,english,india,jaipur,95,76000,3000,1000,2000,2400).
paper(del5,hindi,india,delhi,88,291704,5348,2431,3890,4000).
paper(rajdhani,hindi,india,delhi,75,275000,4000,2000,3000,3500).
paper(timesofindia,english,india,delhi,90,85000,3000,1000,2000,2500).
paper(thehindu,english,india,delhi,95,76000,3000,1000,2000,2400).
paper(pioneer,english,india,delhi,97,276000,4000,2000,3000,3400).


choice(college_student,sports).
choice(housewife,magzine).
choice(working,countrypage).


main(_,_,_,[]).

main(List1,Lang,Country,[H|T]):-
nl,nl,nl,nl,
nl,write('  BELOW CALCULATION FOR CITY  '),write(H),
nl,nl,nl,nl,
paper_main(List1,Lang,Country,H),
main(List1,Lang,Country,T).



paper_main(List1,Lang,Country,City):-
sizelist2(List1,_),
get_list(List1,List2),
sizelist2(List2,Size2),
Size2==1->buy(List2,Lang,Country,City);purchase('front',Lang,Country,City).

get_list([H|T],List2):-
choice(H,Period),nl,
get_list(T,Time2),
append([Period],Time2,List2).    %/this is so far  the best logic to append  Stick to it/

get_list([],[]).



buy([H|_],Lang,Country,City):-
((H==sports->purchase('sports',Lang,Country,City));(H==magzine->purchase('magzine',Lang,Country,City));(H==countrypage->purchase('countrypage',Lang,Country,City))).


purchase(Page,Lang,Country,City):-
nl,write('purchase '),write(Page),write(' Section of Newspapers :'),
findall(Name,paper(Name,Lang,Country,City,_,_,_,_,_,_),Bag),
write(Bag),
algorithm(Bag,Page,0,_).


algorithm([H|T],Page,A,_):-

paper(H,_,_,_,Repo,Copies,Front,Mag,Cpage,Sports),
((Page==front->Rate is Front);(Page==magzine->Rate is Mag);(Page==countrypage->Rate is Cpage);(Page==sports->Rate is Sports);write('oop1')),
Product is (Repo*Copies)/Rate,
Product>A,
nl,nl,write('#####################'),
nl,write(H),
nl,write('#####################'),nl,
nl,write('Readers for the newspaper '),write(H),write(' is : '),write(Copies),
nl,write('Repo for the newspaper '),write(H),write(' is : '),write(Repo),
nl,write('Rate of the newspaper '),write(H),write( ' for the page '),write(Page),write(' is : '),write(Rate),

nl,write('Calculated Product is '),write(Product),
algorithm(T,Page,Product,H).



algorithm([H|T],Page,A,Winner):-
paper(H,_,_,_,Repo,Copies,Front,Mag,Cpage,Sports),
((Page==front->Rate is Front);(Page==magzine->Rate is Mag);(Page==countrypage->Rate is Cpage);(Page==sports->Rate is Sports);write('oop1')),
Product is (Repo*Copies)/Rate,
Product=<A,
nl,nl,write('#####################'),
nl,write(H),
nl,write('#####################'),nl,
nl,write('Readers for the newspaper '),write(H),write(' is : '),write(Copies),
nl,write('Repo for the newspaper '),write(H),write(' is : '),write(Repo),
nl,write('Rate of the newspaper '),write(H),write( ' for the page '),write(Page),write(' is : '),write(Rate),

nl,write('Calculated Product is '),write(Product),
algorithm(T,Page,A,Winner).



algorithm([],Page,Score,N):-
nl,nl,write('#############################'),
nl,write('SOFTWARE RECOMMENDATION IS'),
nl,write(N),
nl,write('With score points'),
nl,write(Score),
nl,write('Buy page of the newspaper :'),
write(Page),
nl,write('#############################').









%/size of any list is calculated here/
sizelist2([_|T],Size):-
sizelist2(T,F1),
Size is 1+F1.
sizelist2([],0).
%/size of any list is calculated here/











