https://opendata.eol.org/dataset/23ce9ac5-5d45-4b6b-b413-aac9560c4ec6/resource/3cc02d77-4d10-403d-94b8-c1523f527adb/download/dynamichierarchytrunk2018-11-21.zip
https://editors.eol.org/eol_php_code/applications/content_server/resources/ICTV-virus_taxonomy-with-higherClassification.tar.gz
https://editors.eol.org/eol_php_code/applications/content_server/resources/ioc-birdlist.tar.gz
ASW https://opendata.eol.org/dataset/a1cfd424-23d6-4f06-b112-54bf00ed53ea/resource/8bb533fb-2597-47c6-8276-8232f1fef5a9/download/amphibianspeciesoftheworld.zip
https://opendata.eol.org/dataset/c849d01f-0490-4362-8362-bc5f36902a7a/resource/4db822ea-993d-4927-89d4-26f89b47e155/download/worldodonata.zip
https://opendata.eol.org/dataset/09ff005a-4411-4bbc-9b9f-f43d21d232f5/resource/fee0a3c4-8bfe-4152-ab9c-4239d3db4566/download/kitchingetal2018.zip
https://opendata.eol.org/dataset/3a6042b0-218d-4ba5-b534-107820a4907c/resource/765145d3-14e4-41b6-b97f-2e783fa1917c/download/eoldynamichierarchyerebidaepatch.zip
https://opendata.eol.org/dataset/e93555d2-f689-44c3-a9c6-a64f1830fc6b/resource/0850d4e6-74fc-4f0f-b0cb-38cf58b98a8e/download/oliveira2012onychophora.zip
https://opendata.eol.org/dataset/2c009b51-8f5f-414b-8cd8-21180fb869b5/resource/964743b5-03ff-4536-b2c2-2d443ddaf438/download/eolearthwormpatch.zip
https://editors.eol.org/eol_php_code/applications/content_server/resources/NCBI_Taxonomy_Harvest_DH.tar.gz
https://editors.eol.org/eol_php_code/applications/content_server/resources/WoRMS_DH.tar.gz
https://editors.eol.org/eol_php_code/applications/content_server/resources/Catalogue_of_Life_Protists_DH.tar.gz
https://editors.eol.org/eol_php_code/applications/content_server/resources/Catalogue_of_Life_DH.tar.gz

Below is from: https://docs.google.com/document/d/1OHOKPZz-wNGFPkcQ8EcJWoyjXy3lZLim5pUuX9zpi5c/edit

To execute python file that builds dwh on the server type this into command line:
$ bin/jython build_dwh.py

1. There are three folders in smasher. The one you want is reference-taxonomy
2. Inside this directory are several files and folder. Including build_dwh.py, which is the code that actually runs smasher and brings all the individual hierarchies together
3. If you look in the ‘tax’ directory you will see four subdirectories. These directories hold old versions of dwh and the separation file. 
  Anytime you run a new version of dwh, put the previous version in the prev_dwh directory. This will help smasher keep the identifiers consistent between versions.

4. In the separation directory are two files, synonym.tsv and taxonomy.tsv. These files are very high level and tell smasher about synonyms for high-level taxa, such as that Eukarya and Eukaryota are synonyms.
5. One thing smasher does use to help it merge hierarchies is rank. But, it needs to know about all the ranks and their order or it doesn’t know what to do. Our hierarchies had a lot of odd ranks, 
  so I had to add them to the list of known ranks for smasher to use. There is a Rank.java file where I’ve added new ranks. If you need to add more ranks, this is where you would do so. 
  The file is in /home/annethessen/reference-taxonomy/org/opentreeoflife/taxa
  
  ELI: after updating Rank.java, you must compile this file to create a new Rank.class file.
  $ javac Rank.java
  

6. In the ‘t’ directory is another directory called ‘tax’. This is where all the input hierarchies go. Each version of each hierarchy should have its own directory.

7. After you run smasher, the results will be in the ‘test’ directory.

RUN SMASHER
Smasher gives you the “smashed” hierarchy as a tsv file and a few other text files that you can use to figure out why it made some of the decisions it made (debugging). 
These files will be in the /test/ directory. The smasher documentation explains what each file means. 
There is also a paper that explains some of how smasher works https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5515096/
Katja will need the smasher results in DwC-A format. 

reference-taxonomy/
  build_dwh.py
  /tax/
    ...versions...
    /separation/
  /t/
    /tax/

run in eol-smasher:
zip -r test_2018_12_19.zip test/
run in local:
scp smasher:~/temp/test_2018_12_19.zip ~/Desktop/eee/




===============================================================================================================================================================
now I'm able to scp from local to eol-smasher
scp filename.ext smasher:~/temp/.
scp smash_v3.zip smasher:~/temp/.
scp build_dwh.py smasher:~/temp/.

scp from eol-smasher to local MacMini:
scp smasher:~/temp/synonyms.tsv ~/Desktop/eee/
scp smasher:~/temp/taxonomy.tsv ~/Desktop/eee/
scp smasher:~/temp/build_dwh.py.bak ~/Desktop/eee/
scp smasher:~/temp/Rank.java ~/Desktop/eee/

===============================================================================================================================================================
How do I use zip command to compress a folder?
The syntax is
zip -r filename.zip folder
zip -r filename.zip folder1 folder2
zip -r filename.zip /path/to/folder1 /path/to/file2

To create compressed archive named data.zip of data folder in the current directory, run:
zip -r data.zip data/
===============================================================================================================================================================
===============================================================================================================================================================
===============================================================================================================================================================
===============================================================================================================================================================
