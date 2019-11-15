

insert into login values('admin','adminmail','admin',true);
insert into login values('antoine','mailantoine','antoine',false);


  insert into ADHERENT values ((select count(*)+1 from adherent),'Laraichi','Aymane','15/02/2000','homme','0650245895');
  insert into ADHERENT values ((select count(*)+1 from adherent),'Locattelli','Antoine','15/02/2000','homme','0650245895');
  insert into ADHERENT values ((select count(*)+1 from adherent),'Alida','Marie','15/02/2000','femme','0650245895');
  insert into ADHERENT values ((select count(*)+1 from adherent),'Dimitri','Russkof','15/02/2000','homme','0650245895');
  insert into ADHERENT values ((select count(*)+1 from adherent),'Ducon','Lajoie','15/02/2000','homme','0650245895');
  insert into ADHERENT values ((select count(*)+1 from adherent),'Bekele','Naod','15/02/2000','homme','0650245895');

insert into Joueurs values(1,'-9',5,72);
insert into Joueurs values(2,'-15F',13,15);
insert into Joueurs values(4,'SeniorsM',10,25);

insert into EQUIPE values ('-9',1,2);
insert into Entraineurs values(5,'-9');

insert into Bureau values (6,'President');

  insert into License values(1,FALSE,70,'Joueur');
  insert into License values(2,true,170,'Joueur');
  insert into License values(6,TRue,1,'Dirigeant');

  Insert into contact values('Email@')
