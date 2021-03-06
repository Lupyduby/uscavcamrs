package ueasy.it140.activities;

import java.util.ArrayList;
import java.util.HashMap;

import ueasy.it140.R;
import ueasy.it140.database.Database;
import android.app.ActionBar;
import android.app.Activity;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Bundle;
import android.text.Editable;
import android.text.Html;
import android.text.TextWatcher;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

public class Search extends Activity {

	
	Database DB;
	
	// List view
	private ListView lv;

	// Listview Adapter
	ArrayAdapter<String> adapter;

	// Search EditText
	EditText inputSearch;

	// ArrayList for Listview
	ArrayList<HashMap<String, String>> productList;

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.search);

		ActionBar ab = getActionBar();
		ab.setTitle(Html.fromHtml("<font color='#ffffff'>SEARCH </font>"));
		ab.setBackgroundDrawable(new ColorDrawable(Color.parseColor("#048abf")));

		DB = new Database(this);
		
		// Listview Data
		String amenities[] = DB.getAllAmenityName();
		
		for(int b=0; b<10 && amenities[b]!=null ; b++){
			Toast.makeText(this, ""+amenities[b], Toast.LENGTH_SHORT).show();
			
		}
		
		String[] products = amenities;
		
		lv = (ListView) findViewById(R.id.list_view);
		inputSearch = (EditText) findViewById(R.id.inputSearch);

		// Adding items to listview
		adapter = new ArrayAdapter<String>(this, R.layout.search_item,
				R.id.product_name, products);

		lv.setAdapter(adapter);
		lv.setVisibility(View.INVISIBLE);
		/**
		 * Enabling Search Filter
		 * */
		inputSearch.addTextChangedListener(new TextWatcher() {

			@Override
			public void onTextChanged(CharSequence cs, int arg1, int arg2,
					int arg3) {
				// When user changed the Text
				if (cs.length() >= 3) {
					lv.setVisibility(View.VISIBLE);
					Search.this.adapter.getFilter().filter(cs);
				}
				
				if (cs.length() == 0 || cs.length() < 3) {
					lv.setVisibility(View.INVISIBLE);
				}
				
			}

			@Override
			public void beforeTextChanged(CharSequence arg0, int arg1,
					int arg2, int arg3) {
				// TODO Auto-generated method stub

			}

			@Override
			public void afterTextChanged(Editable arg0) {
				// TODO Auto-generated method stub

			}
		});
	}
}