pdf: bozza_soluzione.pdf README.pdf
	#### "Creo pdf, pdt e html solo se necessario."
bozza_soluzione.pdf: bozza_soluzione.md 
	pandoc -o bozza_soluzione.pdf bozza_soluzione.md
	pandoc -o bozza_soluzione.html bozza_soluzione.md
	pandoc -o bozza_soluzione.odt bozza_soluzione.md
README.pdf: README.md
	pandoc -o README.pdf  README.md
	pandoc -o README.html  README.md
	pandoc -o README.odt  README.md
