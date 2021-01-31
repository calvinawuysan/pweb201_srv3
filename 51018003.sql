-- berapa banyak tamu yang pernah tinggal di room 1303?
SELECT COUNT(*) FROM guests WHERE room='1303';

-- berapa banyak tamu yang check-in pada tanggal 27 April 2020?
SELECT COUNT(*) FROM guests WHERE date_in='2020-04-27';

-- berapa banyak tamu yang check-out pada tanggal 8 Mei 2020?
SELECT COUNT(*) FROM guests WHERE date_out='2020-05-08';

-- berapa banyak kamar yang memiliki city view?
SELECT COUNT(*) FROM rooms WHERE dview='C';

-- berapa banyak member yang tinggal dikota Bandung?
SELECT COUNT(*) FROM members WHERE kota='Bandung';

-- ada berapa banyak kamar di hotel ini?
SELECT COUNT(*) FROM rooms;

-- ada berapa banya member di hotel ini?
SELECT COUNT(*) FROM members;

-- berapa banyak member yang berasal dari negara Indonesia?
SELECT COUNT(*) FROM members WHERE negara='ID';

-- berapa banyak kamar suite di hotel ini?
SELECT COUNT(*) FROM rooms WHERE rtype='D';

-- tamu dari negara mana saja yang pernah menginap di hotel ini?
SELECT * FROM country;

-- siapa saja tamu orang indonesia yang menginap pada bulan november?
SELECT guests.member_ID, guests.date_in, members.nama, members.negara, country.Country
FROM guests
INNER JOIN members USING(members_ID)
INNER JOIN country ON members.negara = country.CC
WHERE (country.CC='ID') and (MONTH(date_in) = 11);

-- siapa saja yang menjadi tamu dihotel pada bulan november?
SELECT * 
FROM guests INNER JOIN members USING(members_ID)
WHERE MONTH(date_in) = 11;

-- berapa kali dan kapan Sofyan Thayf menjadi tamu di hotel ini?
SELECT guests.member_ID,guests.date_in, members.nama
FROM guests
INNER JOIN members USING (member_ID)
WHERE (members.nama LIKE'%Thayf');