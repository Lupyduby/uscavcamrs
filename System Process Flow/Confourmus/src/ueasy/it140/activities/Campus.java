package ueasy.it140.activities;

import java.io.IOException;
import java.util.ArrayList;

import ueasy.it140.adapters.CampusAdapter;
import ueasy.it140.database.Database;
import ueasy.it140.message.Message;
import ueasy.it140.models.CampusModel;
import android.annotation.SuppressLint;
import android.app.ActionBar;
import android.app.ListActivity;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Bundle;
import android.view.View;
import android.widget.ListView;

public class Campus extends ListActivity {
	
	Database DB;

	/** Called when the activity is first created. */
	@SuppressLint("NewApi") @Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		
		DB = new Database(this);
		DB.getWritableDatabase();
		try {
			DB.copyDataBase();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			Message.message(this, e.toString());
		}
		
				
		DB.BuildingName();
		
		ActionBar ab = getActionBar();
		ab.setTitle("Select Campus");
		
		ab.setIcon(android.R.color.transparent);
		ab.setBackgroundDrawable(new ColorDrawable(Color.parseColor("#048abf")));
		ArrayList<CampusModel> items = CampusModel.populateItems();
		CampusAdapter adapter = new CampusAdapter(this, items);

		setListAdapter(adapter);
	}

	@Override
	protected void onListItemClick(ListView l, View v, int position, long id) {
		// TODO Auto-generated method stub
		switch (position) {
		case 0:
			Intent another = new Intent(this, Map.class);
			startActivity(another);
			break;
		}
	}

}
