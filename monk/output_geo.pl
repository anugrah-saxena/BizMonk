w(List,Am,Hr,Po):-
consult('output_political'),
consult('output_hr'),
consult('output_amenities'),
o(List,Am,Hr,Po).

o([],_,_,_).

o([H|T],Am,Hr,Po):-

output_amenities(H,Score_A),

output_hr(H,Score_H1),
Score_H is 100*(Score_H1/3.877),

output_political(H,Score_P),
nl,nl,nl,write(H),nl,nl,
nl,write(Am),
nl,write(Hr),
nl,write(Po),
nl,write(Score_A),
nl,write(Score_H),
nl,write(Score_P),

Final_geo is (Am*Score_A+Hr*Score_H+Po*Score_P)/(Am+Hr+Po),
nl,nl,nl,write('#################'),nl,nl,
write('SCORE FINAL GEO ANALYSIS FOR CITY   :'),write(H),write(' is :  '),write(Final_geo),
o(T,Am,Hr,Po).

