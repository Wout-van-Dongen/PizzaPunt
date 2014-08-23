USE PizzaPunt;

-- -------------------------------------------------------
-- Categories --------------------------------------------
-- -------------------------------------------------------

INSERT INTO Category VALUES('Pizza');
INSERT INTO Category VALUES('Drank');

-- -------------------------------------------------------
-- Adres--------------------------------------------------
-- -------------------------------------------------------

INSERT INTO Adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(1,'Castermanslaan', '26', 'Roversbos', '1599');
INSERT INTO Adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(2,'Krijgsvaart', '50', 'Wazemeer', '8710');
INSERT INTO Adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(3,'Mijnwerkersroute', '1A', 'Doordenbergh', '1212');
INSERT INTO Adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(4,'Mijnwerkersroute', '1B', 'Doordenbergh', '1212');

-- -------------------------------------------------------
-- Klant -------------------------------------------------
-- -------------------------------------------------------

INSERT INTO Klant (Username, Voornaam, Naam) VALUES('JefVDH','Jefke', 'Vanop Den Hoeck');
INSERT INTO Klant (Username, Voornaam, Naam) VALUES('Fieetje','Stefanie', 'Kiezelmans');
INSERT INTO Klant (Username, Voornaam, Naam) VALUES('RockyRangers','Rocky', 'Rangers');
INSERT INTO Klant (Username, Voornaam, Naam) VALUES('CGPizza','Christine', 'Goevearts');
INSERT INTO Klant (Username, Voornaam, Naam) VALUES('Raphaelle','Kevin', 'Kiezelmans');

-- -------------------------------------------------------
-- KlantAdres --------------------------------------------
-- -------------------------------------------------------

INSERT INTO KlantAdres (Username, AdresID) VALUES(1,1);
INSERT INTO KlantAdres (Username, AdresID) VALUES(2,2);
INSERT INTO KlantAdres (Username, AdresID) VALUES(3,3);
INSERT INTO KlantAdres (Username, AdresID) VALUES(4,2);
INSERT INTO KlantAdres (Username, AdresID) VALUES(5,4);

-- -------------------------------------------------------
-- Product -----------------------------------------------
-- -------------------------------------------------------

INSERT INTO Product (ProductID, Naam, CategoryID, Beschrijving) values(1,'Pizza Lobster','Pizza' , 'Luxe pizza gegarneerd met stukjes schaaldier.');
INSERT INTO Product (ProductID, Naam, CategoryID, Beschrijving) values(2,'Pizza Green','Pizza' , 'Pizza bedekt met verscheidene groenten en afgewerkt met wat kruidenkaas.');
INSERT INTO Product (ProductID, Naam, CategoryID) values(3,'Pizza Citrus','Pizza');
INSERT INTO Product (ProductID, Naam, CategoryID) values(4,'Coza Cola','Drank');
INSERT INTO Product (ProductID, Naam, CategoryID) values(5,'Coza Cola Lite','Drank');
INSERT INTO Product (ProductID, Naam, CategoryID) values(6,'Coza Cola Null','Drank');
INSERT INTO Product (ProductID, Naam, CategoryID) values(7,'Pizza Nomnom','Pizza');
INSERT INTO Product (ProductID, Naam, CategoryID, Beschrijving) values(8,'Pizza BBQ','Pizza' , 'Pizza bedekt met allerlei BBQ specialiteiten.');

-- -------------------------------------------------------
-- Bestellingen ------------------------------------------
-- -------------------------------------------------------



-- -------------------------------------------------------
-- Ingredienten ------------------------------------------
-- -------------------------------------------------------

INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('tomatensaus', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('kreeft', false);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('crab', false);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('broccoli', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('spinazie', false);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('mozerella', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('ementaller', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('citroen', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('look', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('varkensgehakt', false);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('surimi', false);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('ui', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('worstjes', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('spek', false);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('rode peper', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('BBQsaus', true);
INSERT INTO Ingredienten (IngredientenID, Vegetarisch) VALUES('kaviaar', true);

-- -------------------------------------------------------
-- ProductIngredienten -----------------------------------
-- -------------------------------------------------------

-- Pizza Lobster
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'tomatensaus');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'crab');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'kreeft');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'look');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'kaviaar');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'citroen');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(1, 'mozerella');

-- Pizza Green
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(2, 'tomatensaus');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(2, 'broccoli');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(2, 'spinazie');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(2, 'mozerella');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(2, 'ui');

-- Pizza Citrus
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(3, 'tomatensaus');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(3, 'varkensgehakt');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(3, 'citroen');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(3, 'mozerella');

-- Pizza Nomnom
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(7, 'tomatensaus');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(7, 'varkensgehakt');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(7, 'look');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(7, 'mozerella');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(7, 'ementaller');

-- Pizza BBQ
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'tomatensaus');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'varkensgehakt');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'ui');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'spek');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'worstjes');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'BBQsaus');
INSERT INTO ProductIngredienten (ProductID, IngredientenID) VALUES(8, 'ementaller');

-- -------------------------------------------------------
-- Beschikbaarheid ---------------------------------------
-- -------------------------------------------------------

INSERT INTO Beschikbaarheid (BeschikbaarheidID, BeginDatum, EindDatum) VALUES(1, '0000-1-1', '0000-12-31'); -- always
INSERT INTO Beschikbaarheid (BeschikbaarheidID, BeginDatum, EindDatum) VALUES(2, '0000-3-21', '0000-09-21'); -- lente-zomer
INSERT INTO Beschikbaarheid (BeschikbaarheidID, BeginDatum, EindDatum) VALUES(3, '0000-7-1', '0000-8-31'); -- zomermaanden

-- -------------------------------------------------------
-- ProductBeschikbaarheid --------------------------------
-- -------------------------------------------------------

INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(1, 1);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(2, 2);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(3, 1);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(4, 1);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(5, 1);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(6, 1);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(7, 1);
INSERT INTO ProductBeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(8, 3);

