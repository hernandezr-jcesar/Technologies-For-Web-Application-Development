if __name__ == '__main__':
    cadena = ""
    with open("Paises.txt", encoding="utf8") as archivo:
        with open("NewPaises.txt", 'a') as file:
            for linea in archivo:
                nuevalinea = linea.rstrip()
                cadena = cadena + "," + nuevalinea
            file.write(cadena)

