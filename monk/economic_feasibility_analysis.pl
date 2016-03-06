


%//takelookhere 
q:-
ecofeasibility(msi,websites, india, jaipur).


%/ecofeasiblity starts here/
ecofeasibility(Scale, Market, Country, City):-
consult('data_all'),
nl,write('CALLING FUNCTION ECONOMIC FEASIBILITY .....'),nl,
check_comptetion(Scale, Market, Country, City),
nl,write('LEAVING FUNCTION ECONOMIC FEASIBILITY .....'),nl.
%/ecoofeasiblity  ends here/



%/comptetion starts here/
check_comptetion( _, Market, _, _):-
nl,write('CALLING FUNCTION COMPTETION FEASIBILITY .....'),nl,write('Your chief Competitors according to our software are :'),
findall(Name,company(Name,_,_,Market,_,_),Bag),
write(Bag),nl,nl,
finanalysis(Bag,F),write('overall finance competition points are : '),write(F),nl,
sizelisteco(Bag,Size),write('total number of competitors are :'),write(Size),
nl,nl,nl,write('CALCULATED FINANCIAL COMPETITION FINAL IS :'),Final is F/Size,write(Final),nl,nl,                                                       %/color/

write('[Note :Calculations below based on the Data from Forbes Magzine Company rating 2010 -2011]'),nl,

credibility_analysis(Bag,C),nl,nl,nl,write('overall credebility points of competitors are :'),write(C),nl,
nl,nl,nl,write('CALCULATED CERDIBILITY COMPETITION FINAL IS :'),FinalC is C/Size,write(FinalC),nl,nl,                                                       %/color/

nl,write('LEAVING FUNCTION COMPETTION FEASIBILITY .....'),nl.
%/compltetion  ends here/


finanalysis([H|T],F):-

financial_company(H,Equity,Growth),
write('the current equity of the company  :'),write(H),write(' is '),write(Equity),nl,
write('the current fiscal growth rate of the company :'),write(H),write(' is '),write(Growth),nl,
write('calculated financial factor is :'),Product is Equity*Growth,write(Product),nl,
(Product>100000 -> write('Financial condition of  '),write(H),write(' is : A'),F1 is 10,nl;write('Financial condition of '),write(H),write(' is : B'),F1 is 5,nl),

append('Competition_Financial_Rating.txt'),nl,nl,

write('the current equity of the company  :'),write(H),write(' is '),write(Equity),nl,
write('the current fiscal growth rate of the company :'),write(H),write(' is '),write(Growth),nl,
write('calculated financial factor is :'),Product is Equity*Growth,write(Product),nl,
(Product>100000 -> write('Financial condition of  '),write(H),write(' is : A'),F1 is 10,nl;write('Financial condition of '),write(H),write(' is : B'),F1 is 5,nl),


told,

%/insert Financial Competition bureau in tophp.txt file for GRAPHICAL REPORT/
append('tophp.txt'),
write(H),nl,
Product is Equity*Growth,
write(Product),nl,told,



finanalysis(T,F2),
F is F1+F2.

finanalysis([],0).

credibility_analysis([H|T],C):-
credibility_company(H,Years,Repo),nl,nl,
write('the functional years of the company  :'),write(H),write(' is '),write(Years),nl,
write('the current Reputation point of  :'),write(H),write(' is '),write(Repo),nl,
Rating is (0.2*Years+0.8*Repo)/0.8,write('The calculated rating score for company '),write(H),write(' is :'),write(Rating),nl,write('Credibility Rating of company is '),
(Rating>90 ->write('AAA+'),F1 is 10;Rating>80->write('AAA'),F1 is 9;Rating>70 ->write('A'),F1 is 7; Rating>60->write('B'), F1 is 6; Rating >0-> write('C'),F1 is 5;!),nl,nl,


append('Competition_Credibility_Rating.txt'),
write('the functional years of the company  :'),write(H),write(' is '),write(Years),nl,
write('the current Reputation point of  :'),write(H),write(' is '),write(Repo),nl,
Rating is (0.2*Years+0.8*Repo)/0.8,write('The calculated rating score for company '),write(H),write(' is :'),write(Rating),nl,write('Credibility Rating of company is '),
(Rating>90 ->write('AAA+'),F1 is 10;Rating>80->write('AAA'),F1 is 9;Rating>70 ->write('A'),F1 is 7; Rating>60->write('B'), F1 is 6; Rating >0-> write('C'),F1 is 5;!),nl,nl,

told,

%/insert Financial Competition bureau in tophp.txt file for GRAPHICAL REPORT/
append('tophp2.txt'),
write(H),nl,
Rating is (0.2*Years+0.8*Repo)/0.8,write(Rating),nl,
told,

credibility_analysis(T,F2),
C is F1+F2.


credibility_analysis([],0).   %/PLEASE DONT FORGET ME I GIVE 'NO AS AN ANSWER'/ 




%/size of any list is calculated here/
sizelisteco([_|T],Size):-
sizelisteco(T,F1),
Size is 1+F1.
sizelisteco([],0).
%/size of any list is calculated here/