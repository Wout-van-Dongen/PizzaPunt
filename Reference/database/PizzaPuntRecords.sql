USE pizzapunt;

-- -------------------------------------------------------
-- Categories --------------------------------------------
-- -------------------------------------------------------

INSERT INTO category VALUES('Pizza');
INSERT INTO category VALUES('Drank');

-- -------------------------------------------------------
-- Adres--------------------------------------------------
-- -------------------------------------------------------

INSERT INTO adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(1,'Castermanslaan', '26', 'Roversbos', '1599');
INSERT INTO adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(2,'Krijgsvaart', '50', 'Wazemeer', '8710');
INSERT INTO adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(3,'Mijnwerkersroute', '1A', 'Doordenbergh', '1212');
INSERT INTO adres (AdresID, Straat, Huisnr, Gemeente, Postcode) VALUES(4,'Mijnwerkersroute', '1B', 'Doordenbergh', '1212');

-- -------------------------------------------------------
-- Klant -------------------------------------------------
-- -------------------------------------------------------

INSERT INTO klant (KlantID, Vooraam, Naam) VALUES(1,'Jefke', 'Vanop Den Hoeck');
INSERT INTO klant (KlantID, Voornaam, Naam) VALUES(2,'Stefanie', 'Kiezelmans');
INSERT INTO klant (KlantID, Voornaam, Naam) VALUES(3,'Rocky', 'Rangers');
INSERT INTO klant (KlantID, Voornaam, Naam) VALUES(5,'Christine', 'Goevearts');
INSERT INTO klant (KlantID, Voornaam, Naam) VALUES(4,'Kevin', 'Kiezelmans');

-- -------------------------------------------------------
-- KlantAdres --------------------------------------------
-- -------------------------------------------------------

INSERT INTO klantadres (KlantID, AdresID) VALUES(1,1);
INSERT INTO klantadres (KlantID, AdresID) VALUES(2,2);
INSERT INTO klantadres (KlantID, AdresID) VALUES(3,3);
INSERT INTO klantadres (KlantID, AdresID) VALUES(4,2);
INSERT INTO klantadres (KlantID, AdresID) VALUES(5,4);

-- -------------------------------------------------------
-- Product -----------------------------------------------
-- -------------------------------------------------------

INSERT INTO product (ProductID, Naam, CategoryID, Beschrijving) values(1,'Pizza Lobster','Pizza' , 'Luxe pizza gegarneerd met stukjes schaaldier.');
INSERT INTO product (ProductID, Naam, CategoryID, Beschrijving) values(2,'Pizza Green','Pizza' , 'Pizza bedekt met verscheidene groenten en afgewerkt met wat kruidenkaas.');
INSERT INTO product (ProductID, Naam, CategoryID) values(3,'Pizza Citrus','Pizza');
INSERT INTO product (ProductID, Naam, CategoryID) values(4,'Coza Cola','Drank');
INSERT INTO product (ProductID, Naam, CategoryID) values(5,'Coza Cola Lite','Drank');
INSERT INTO product (ProductID, Naam, CategoryID) values(6,'Coza Cola Null','Drank');
INSERT INTO product (ProductID, Naam, CategoryID) values(7,'Pizza Nomnom','Pizza');
INSERT INTO product (ProductID, Naam, CategoryID, Beschrijving) values(8,'Pizza BBQ','Pizza' , 'Pizza bedekt met allerlei BBQ specialiteiten.');

-- -------------------------------------------------------
-- Bestellingen ------------------------------------------
-- -------------------------------------------------------



-- -------------------------------------------------------
-- Ingredienten ------------------------------------------
-- -------------------------------------------------------

INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('tomatensaus', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('kreeft', false);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('crab', false);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('broccoli', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('spinazie', false);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('mozerella', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('ementaller', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('citroen', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('look', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('varkensgehakt', false);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('surimi', false);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('ui', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('worstjes', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('spek', false);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('rode peper', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('BBQsaus', true);
INSERT INTO ingredienten (IngredientenID, Vegetarisch) VALUES('kaviaar', true);

-- -------------------------------------------------------
-- ProductIngredienten -----------------------------------
-- -------------------------------------------------------

-- Pizza Lobster
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'tomatensaus');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'crab');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'kreeft');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'look');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'kaviaar');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'citroen');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(1, 'mozerella');

-- Pizza Green
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(2, 'tomatensaus');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(2, 'broccoli');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(2, 'spinazie');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(2, 'mozerella');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(2, 'ui');

-- Pizza Citrus
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(3, 'tomatensaus');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(3, 'varkensgehakt');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(3, 'citroen');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(3, 'mozerella');

-- Pizza Nomnom
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(7, 'tomatensaus');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(7, 'varkensgehakt');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(7, 'look');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(7, 'mozerella');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(7, 'ementaller');

-- Pizza BBQ
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'tomatensaus');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'varkensgehakt');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'ui');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'spek');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'worstjes');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'BBQsaus');
INSERT INTO productingredienten (ProductID, IngredientenID) VALUES(8, 'ementaller');

-- -------------------------------------------------------
-- Beschikbaarheid ---------------------------------------
-- -------------------------------------------------------

INSERT INTO beschikbaarheid (BeschikbaarheidID, BeginDatum, EindDatum) VALUES(1, '0000-1-1', '0000-12-31'); -- always
INSERT INTO beschikbaarheid (BeschikbaarheidID, BeginDatum, EindDatum) VALUES(2, '0000-3-21', '0000-09-21'); -- lente-zomer
INSERT INTO beschikbaarheid (BeschikbaarheidID, BeginDatum, EindDatum) VALUES(3, '0000-7-1', '0000-8-31'); -- zomermaanden

-- -------------------------------------------------------
-- ProductBeschikbaarheid --------------------------------
-- -------------------------------------------------------

INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(1, 1);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(2, 2);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(3, 1);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(4, 1);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(5, 1);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(6, 1);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(7, 1);
INSERT INTO productbeschikbaarheid (ProductID, BeschikbaarheidID) VALUES(8, 3);

