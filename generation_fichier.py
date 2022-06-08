import xlrd
import sys
import os


document = xlrd.open_workbook("Activites.xlsx")
feuille_1 = document.sheet_by_index(0)
rows = feuille_1.nrows
cols = feuille_1.ncols

f=open("Archive_activite.txt","w+")
print(sys.argv[1])
villeid=int(sys.argv[1])
ville = feuille_1.cell_value(villeid,1)
f.write(ville)

for i in range(8, cols):
    cellule = feuille_1.cell_value(villeid,i) #rows=i ; colx=1
    if cellule!='':
        activite=feuille_1.cell_value(7,i)
        f.write("\n- %s \n" %(activite))
f.close





















document = xlrd.open_workbook(lien1)
feuille_1 = document.sheet_by_index(0)
rows = feuille_1.nrows
cols = feuille_1.ncols
print("MARIE LA FRANCOISE")
for i in range(8, rows):
    cellule = feuille_1.cell_value(i,1) #rows=i ; colx=1
    if cellule!='':
        print("%d : %s" %(i,cellule))












