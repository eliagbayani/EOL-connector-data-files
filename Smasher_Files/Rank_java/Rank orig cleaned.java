/*
  Smaller number means higher (more rootward) rank
*/

package org.opentreeoflife.taxa;

import java.util.Map;
import java.util.HashMap;

public class Rank {

    public String name;
    public int level;

    Rank(String name, int level) {
        this.name = name;
        this.level = level;
    }

    static String[][] rankStrings = {
        {"domain","superkingdom","kingdom","subkingdom","division","infrakingdom","superphylum"},
        {"phylum","subphylum","infraphylum","division","subdivision","superclass"},
        {"class","subclass","infraclass","subterclass","megacohort","supercohort","cohort","subcohort","infracohort","superorder"},
        {"order","suborder","infraorder","parvorder","section","subsection","series","subseries","superfamily","epifamily"},
        {"family","subfamily","supertribe","tribe","subtribe"},
        {"genus","subgenus","species group","species-group","species subgroup"},
        {"species","infraspecificname","subspecies","natio","variety","varietas","subvariety","form","forma","f.","subform","clade","cluster","paraphyletic group","polyphyletic group","no rank"},
    };

    static Map<String, Rank> ranks = new HashMap<String, Rank>();
    public static Rank NO_RANK;

    static {
        for (int i = 0; i < rankStrings.length; ++i)
            for (int j = 0; j < rankStrings[i].length; ++j) {
                String name = rankStrings[i][j];
                ranks.put(name, new Rank(name, (i+1)*100 + j*10));
            }
        NO_RANK = new Rank("no rank", -1);
        ranks.put("no rank", NO_RANK);
    }

    public static Rank SPECIES_RANK = ranks.get("species");
    public static Rank GENUS_RANK = ranks.get("genus");
    public static Rank FAMILY_RANK = ranks.get("family");
    public static Rank CLUSTER_RANK = ranks.get("cluster");

    public static Rank getRank(String rankstring) {
        return ranks.get(rankstring);
    }


}
