% help us to build
% input from user
	  company_info(feasibility(Company, Industry, Scale, Budget, Market, Country, City)) :-
		write('Enter Company Name: '),
		readln([Company|_]),
	
		write('Enter Industry Type: '),
		readln([Industry|_]),
    
		write('Enter Company Scale [ssi|msi|lsi]: '),
		readln([Scale|_]),
    
		write('Enter Budget: '),
		readln([Budget|_]),
    
		write('Enter Target Market: '),
		readln([Market|_]),
    
		write('Enter Country: '),
		readln([Country|_]),
      
		write('Enter City: '),
		readln([City|_]).

% input to factdata file
	  saveto(Filename, Feasible) :-
		append(Filename),
		write(Feasible), write('.'), nl,
		told.

		hallabol:-
		company_info(Feasible), saveto('factstore.txt', Feasible).
		
	  %query
	  %company_info(Feasible), saveto('factstore.txt', Feasible).