package ueasy.it140.specificCategories;

import ueasy.it140.R;
import ueasy.it140.activities.AboutAndFaqs;
import ueasy.it140.activities.Category;
import ueasy.it140.activities.Map;
import ueasy.it140.activities.Search;
import ueasy.it140.database.Database;
import android.annotation.SuppressLint;
import android.app.ActionBar;
import android.app.ListActivity;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Bundle;
import android.support.v4.app.NavUtils;
import android.text.Html;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

public class OfficesCategory extends ListActivity {

	Database DB;
	
	  @SuppressLint("DefaultLocale")
	  public void onCreate(Bundle icicle) {
	    super.onCreate(icicle);
	    
	    DB = new Database(this);
	    
	    String[] values = DB.OAName();	    
	    ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,
	        android.R.layout.simple_list_item_1, values);
	    
	    Intent i = getIntent();
	    String title = i.getStringExtra("name");
		getActionBar().setDisplayHomeAsUpEnabled(true);
	    ActionBar ab = getActionBar();
		ab.setTitle(Html.fromHtml("<font color='#ffffff'>"+title.toUpperCase()+"</font>"));
		ab.setBackgroundDrawable(new ColorDrawable(Color.parseColor("#048abf")));
		
	    setListAdapter(adapter);
	  }

	  @Override
	  protected void onListItemClick(ListView l, View v, int position, long id) {
	    String item = (String) getListAdapter().getItem(position);
	    Toast.makeText(this, item + " selected", Toast.LENGTH_LONG).show();
	  }
	  
		@Override
		public boolean onCreateOptionsMenu(Menu menu) {
			// TODO Auto-generated method stub
			MenuInflater inflater = getMenuInflater();
			inflater.inflate(R.menu.category, menu);
			return super.onCreateOptionsMenu(menu);
		}

		@Override
		public boolean onOptionsItemSelected(MenuItem item) {
			// TODO Auto-generated method stub
			switch(item.getItemId())
			{
			case R.id.action_about:
				startActivity(new Intent(this,AboutAndFaqs.class));
				break;
			case R.id.action_search:
				startActivity(new Intent(this,Search.class));
				break;
			case R.id.action_category:
				startActivity(new Intent(this,Category.class));
				break;
			case R.id.action_map:
				startActivity(new Intent(this,Map.class));
				break;
		    case android.R.id.home:
		        NavUtils.navigateUpFromSameTask(this);
		        break;
			}
			return super.onOptionsItemSelected(item);
		}

}
