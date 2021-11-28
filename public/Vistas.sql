

CREATE OR REPLACE VIEW 
VistaCultivo AS
SELECT IDCultivo, Cultivo.IDCampesino, NombreCultivo, Nombre as NombrePropietario, Area, EspecieVegetal.IDEspecieVegetal, NombreEspecie, CaudalDeRiego, VolumenAguaRequeridaAlDia FROM Cultivo 
	JOIN Campesino
    ON Cultivo.IDCampesino = Campesino.IDCampesino
    JOIN EspecieVegetal 
    ON Cultivo.IDEspecieVegetal = EspecieVegetal.IDEspecieVegetal;

CREATE OR REPLACE VIEW 
VistaCampesinosConCultivos AS
	SELECT IDCampesino, NombrePropietario AS NombreCampesino, COUNT(*) AS CantidadDeCultivos 
	FROM vistacultivo 
	GROUP BY IDCampesino;