import xlrd
document = xlrd.open_workbook("Activites.xlsx")
feuille_1 = document.sheet_by_index(0)
rows = feuille_1.nrows
cols = feuille_1.ncols
f=open("select_city.php","w+")
f.write('<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="utf-8">\n  <title>Activite par villes</title>\n')
f.write('<FORM method="post" action="welcome.php"> \n<SELECT id="select_city" name="Villes" size="1">\n')
for i in range(8, rows):
    cellule = feuille_1.cell_value(i,1) #rows=i ; colx=1
    if cellule!='':
        f.write("<option value='%d'>%s</option>\n" %(i,cellule))

f.write('</SELECT> \n<input type="submit" value="VALIDER"> \n</FORM>\n')

