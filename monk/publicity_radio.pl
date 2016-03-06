r:-
fm_query([college_student,working],hindi,india,[jaipur,delhi]).

fm_query(_,_,_,[]).

fm_query(List,Lang,Country,[H|T]):-
nl,nl,write('Calculating for city'),write(H),nl,nl,nl,
fm_main(List,Lang,Country,H),
fm_query(List,Lang,Country,T).



%/fm likes facts start/
%/name  Language  RepoScore Country City /
fm(red,hindi,81.6,india,jaipur).
fm(myfm,hindi,50.5,india,jaipur).
fm(top20,english,91.4,india,jaipur).
fm(rajfm,locale,89,india,jaipur).
fm(crazyfm,english,56,india,delhi).
fm(crazyfmhindi,hindi,56,india,delhi).
fm(boss11,english,76,india,jaipur).
fm(ecofm_h,hindi,66,india,hyderabad).
fm(ecofm_he,english,66,india,hyderabad).
fm(ecofm_m,hindi,66,india,mumbai).
fm(ecofm_n,hindi,66,india,noida).
fm(smartfm,hindi,40,india,jaipur).
%/fm likes facts ends/



%/timing facts starts/
timing(teens,_).
timing(kids,_).
timing(college_student,night).
timing(housewife,noon).
timing(working,drivehours).
%/timing facts ends/


%/show & rates facts starts/
%/FMname, Show Name   Timing   Popularity   Rates/min  /
show(red,drivehoursbuzz,drivehours,88,2820).
show(red,noonbuzz,noon,55,2200).
show(red,trafficpoint,night,91,3400).
show(boss11,drivehoursbuzz,drivehours,88,2820).
show(boss11,noonbuzz,noon,55,2210).
show(top20,trafficpoint,night,91,3440).
show(top20,drivehoursbuzz,drivehours,88,2840).
show(top20,noonbuzz,noon,55,2240).
show(boss11,trafficpoint,night,91,3410).
show(crazyfm,drivehoursbuzz,drivehours,88,2810).
show(crazyfm,noonbuzz,noon,55,2200).
show(crazyfm,trafficpoint,night,91,3400).
show(crazyfmhindi,drivehoursbuzz,drivehours,88,2830).
show(crazyfmhindi,noonbuzz,noon,55,2230).
show(crazyfmhindi,trafficpoint,night,91,3430).
show(myfm,drivehoursbuzz,drivehours,88,1830).
show(myfm,noonbuzz,noon,55,1200).
show(myfm,trafficpoint,night,91,2400).
show(smartfm,smartdrivehours,drivehours,58,1000).
show(smartfm,teabreak,noon,65,1500).
show(smartfm,darknights,night,71,2100).
show(ecofm_h,teabreak,noon,65,1500).
show(ecofm_h,darknights,night,71,2100).
show(ecofm_he,teabreak,noon,65,1500).
show(ecofm_he,darknights,night,71,2100).
show(ecofm_n,teabreak,noon,65,1500).
show(ecofm_n,darknights,night,71,2100).
show(ecofm_m,teabreak,noon,65,1500).
show(ecofm_m,darknights,night,71,2100).


%/show & rates facts ends/

%/main starts here/
fm_main(List,Lang,Country,City):-
findall(Name,fm(Name,Lang,_,Country,City),Bag),
write(Bag),nl,nl,
findtime(List,Time),
write(Time),
algorithm(Time,Bag).



algorithm([H|T],List1):-
algo1(H,List1,0,_),
algorithm(T,List1).

algorithm([],_).

algo1(Fm_time,[E|F],A,_) :-
fm(E,_,Fm_repo,_,_),
show(E,Name,Fm_time,Show_repo,Show_rate),
Product1 is (Show_repo*Fm_repo)/Show_rate,
Product1>A,
nl,write('Score Point of Fm : '),write(E),write(' is '),write(Fm_repo),
nl,write('Score Point of Show : '),write(Name),write(' braoadcasting at '),write(Fm_time),write(' is '),write(Show_repo),
nl,write('Rate/per of Show : '),write(Name),write(' braoadcasting at '),write(Fm_time),write(' is '),write(Show_rate),                                                          %//
nl,write('Calculated Score Final is '),write(Product1),nl,
algo1(Fm_time,F,Product1,E).



algo1(Fm_time,[E|F],A,Winner) :-
fm(E,_,Fm_repo,_,_),
show(E,Name,Fm_time,Show_repo,Show_rate),
Product1 is (Show_repo*Fm_repo)/Show_rate,
Product1=<A,
nl,write('Score Point of Fm : '),write(E),write(' is '),write(Fm_repo),
nl,write('Score Point of Show : '),write(Name),write(' braoadcasting at '),write(Fm_time),write(' is '),write(Show_repo),
nl,write('Rate/per of Show : '),write(Name),write(' braoadcasting at '),write(Fm_time),write(' is '),write(Show_rate),
nl,write('Calculated Score Final is '),write(Product1),nl,
algo1(Fm_time,F,A,Winner).



algo1(Fm_time,[],A,N):-
nl,nl,write('OUR SOFTWARE HIGHLY RECOMMENDS FM:'),write(N),
nl,write('FOR THE TIMING : '),write(Fm_time),
nl,write(' WITH SCORE POINT :'),write(A),nl,nl.




findtime([H|T],Time):-
write(H),
timing(H,Period),nl,
nl,write(Period),nl,
nl,nl,write(T),nl,
findtime(T,Time2),
append([Period],Time2,Time).    %/this is so far  the best logic to append  Stick to it/

findtime([],[]).




















