cypher.csv
- This is the first version. This is the file we sent to Pensoft to generate the eol-geonames ontology.

eol-geonames.csv
- This is the 2nd version.

===============================================================================================================================================================
On Tue, Jan 19, 2021 at 3:42 PM <m.dimitrova@pensoft.net> wrote:
Hello Eli,

We have uploaded the dataset you provided to the Pensoft Annotator API and it is now available for annotation.
The name of the ontology is "eol-geonames". You can make GET requests as follows:

http://api.pensoft.net/annotator
text: West Saharan Montane Xeric Woodlands
ontologies: eol-geonames

Example:
http://api.pensoft.net/annotator?text=West%20Saharan%20Montane%20Xeric%20Woodlands&ontologies=eol-geonames
The Annotator returns a json object with any matched terms and some metadata, such as the position of the term.

If you have any questions about the API, do not hesitate to contact us.

Best,
Mariya
===============================================================================================================================================================

Hi Jen, Katja,
These are the 2 records with the word "Malabar" that are included in our current eol-geonames ontology being used by the Pensoft annotator.
t.name,t.uri
Malabar,http://eol.org/schema/terms/Malabar
Malabar Coast Moist Forests,http://eol.org/schema/terms/Malabar_Coast_moist_forests

Do we want to add 3 more records to differentiate the other "Malabar" items being detected by the annotator from the TreatmentBank resource.

1. Malabar, India
   https://en.wikipedia.org/wiki/Malabar_Coast
2. Malabar, New South Wales, Australia
   https://en.wikipedia.org/wiki/Malabar,_New_South_Wales
3. Malabar, Florida, USA
   https://en.wikipedia.org/wiki/Malabar,_Florida

If yes, do you want to suggest a URI for it before I send to Pensoft?

Thanks,
Eli
