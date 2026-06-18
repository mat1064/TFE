//  version python 

 import random

 class De:
     def __init__(self):
         self.valeur = 0
        
     def lancer(self):
         self.valeur = random.randint(1, 6)
         return self.valeur

 class Combinaison:
     def __init__(self, des):
         # Trie les dés par ordre décroissant pour faciliter l'analyse
         self.des = sorted(des, reverse=True)
        
     def est_421(self):
         return self.des == [4, 2, 1]
    
     def est_brelan(self):
         return self.des[0] == self.des[1] == self.des[2]

     def valeur(self):
         if self.est_421():
             return 100 # Valeur très haute pour gagner
         if self.est_brelan():
             return 50 + self.des[0] # Brelan de 6 > Brelan de 1
         return self.des[0] * 10 + self.des[1] # Exemple de classement

 # --- Exemple d'utilisation ---
 des = [De() for _ in range(3)]
 for d in des: d.lancer()
 valeurs = [d.valeur for d in des]

 comb = Combinaison(valeurs)
 print(f"Dés : {comb.des}")
 if comb.est_421():
     print("421 ! Gagné !")
