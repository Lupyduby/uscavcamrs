package ueasy.it140.specificCategories;


import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import ueasy.it140.R;
import ueasy.it140.adapters.RoomAdapter;
import ueasy.it140.database.Database;
import android.app.ActionBar;
import android.app.Activity;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Bundle;
import android.text.Html;
import android.view.View;
import android.widget.ExpandableListView;
import android.widget.ExpandableListView.OnChildClickListener;
import android.widget.ExpandableListView.OnGroupClickListener;
import android.widget.ExpandableListView.OnGroupCollapseListener;
import android.widget.ExpandableListView.OnGroupExpandListener;
 
public class RoomCategory extends Activity {
 
    RoomAdapter listAdapter;
    ExpandableListView expListView;
    List<String> listDataHeader;
    HashMap<String, List<String>> listDataChild;
    Database DB;
 
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_room);
        
        DB = new Database(this);
        
        Intent i = getIntent();
	    String title = i.getStringExtra("name");
	    
	    ActionBar ab = getActionBar();
		ab.setTitle(Html.fromHtml("<font color='#ffffff'>"+title+"</font>"));
		ab.setBackgroundDrawable(new ColorDrawable(Color.parseColor("#048abf")));
 
        // get the listview
        expListView = (ExpandableListView) findViewById(R.id.lvExp);
 
        // preparing list data
        prepareListData();
 
        listAdapter = new RoomAdapter(this, listDataHeader, listDataChild);
 
        // setting list adapter
        expListView.setAdapter(listAdapter);
 
        // Listview Group click listener
        expListView.setOnGroupClickListener(new OnGroupClickListener() {
 
            @Override
            public boolean onGroupClick(ExpandableListView parent, View v,
                    int groupPosition, long id) {
                // Toast.makeText(getApplicationContext(),
                // "Group Clicked " + listDataHeader.get(groupPosition),
                // Toast.LENGTH_SHORT).show();
                return false;
            }
        });
 
        // Listview Group expanded listener
        expListView.setOnGroupExpandListener(new OnGroupExpandListener() {
 
            @Override
            public void onGroupExpand(int groupPosition) {
//                Toast.makeText(getApplicationContext(),
//                        listDataHeader.get(groupPosition) + " Expanded",
//                        Toast.LENGTH_SHORT).show();
            }
        });
 
        // Listview Group collasped listener
        expListView.setOnGroupCollapseListener(new OnGroupCollapseListener() {
 
            @Override
            public void onGroupCollapse(int groupPosition) {
//                Toast.makeText(getApplicationContext(),
//                        listDataHeader.get(groupPosition) + " Collapsed",
//                        Toast.LENGTH_SHORT).show();
// 
            }
        });
 
        // Listview on child click listener
        expListView.setOnChildClickListener(new OnChildClickListener() {
 
            @Override
            public boolean onChildClick(ExpandableListView parent, View v,
                    int groupPosition, int childPosition, long id) {
                // TODO Auto-generated method stub
//                Toast.makeText(
//                        getApplicationContext(),
//                        listDataHeader.get(groupPosition)
//                                + " : "
//                                + listDataChild.get(
//                                        listDataHeader.get(groupPosition)).get(
//                                        childPosition), Toast.LENGTH_SHORT)
//                        .show();
                return false;
            }
        });
        
       
    }
    
    @Override
    public void onWindowFocusChanged(boolean hasFocus) {
        super.onWindowFocusChanged(hasFocus);
        int width = getResources().getDisplayMetrics().widthPixels;
        if (android.os.Build.VERSION.SDK_INT < android.os.Build.VERSION_CODES.ICE_CREAM_SANDWICH) {
        	expListView.setIndicatorBounds(width - getPixelValue(40), width - getPixelValue(10));
        } else {
        	expListView.setIndicatorBounds(width - getPixelValue(40), width - getPixelValue(10));
        }
    }
 
    public int getPixelValue(int dp) {

        final float scale = getResources().getDisplayMetrics().density;
        return (int) (dp * scale + 0.5f);
    }
    
    /*
     * Preparing the list data
     */
    private void prepareListData() {
        listDataHeader = new ArrayList<String>();
        listDataChild = new HashMap<String, List<String>>();
 
        // Adding child data
        listDataHeader.add("LB");
        listDataHeader.add("PE");
        listDataHeader.add("RH");
 
        // Adding child data
        List<String> lb = new ArrayList<String>();
        String lbRooms[] = DB.ClassroomCode("LB");
        for(int ctr=0; ctr<10 && lbRooms[ctr]!=null; ctr++){
        	lb.add(lbRooms[ctr]);
        }
 
        List<String> pe = new ArrayList<String>();
        String peRooms[] = DB.ClassroomCode("PE");
        for(int ctr2=0; ctr2<10 &&  peRooms[ctr2]!=null; ctr2++){
        	pe.add(peRooms[ctr2]);
        }
 
        List<String> rh = new ArrayList<String>();
        String rhRooms[] = DB.ClassroomCode("RH");
        for(int ctr3=0; ctr3<10 &&  rhRooms[ctr3]!=null; ctr3++){
        	rh.add(rhRooms[ctr3]);
        }
 
        listDataChild.put(listDataHeader.get(0), lb); // Header, Child data
        listDataChild.put(listDataHeader.get(1), pe);
        listDataChild.put(listDataHeader.get(2), rh);
    }
}