package ueasy.it140.activities;

import ueasy.it140.R;
import android.app.Activity;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Bundle;
import android.support.v4.app.NavUtils;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;

public class Map extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_map);
		getActionBar().setTitle("UEASY-TC");
		getActionBar().setDisplayHomeAsUpEnabled(true);
		getActionBar().setBackgroundDrawable(
				new ColorDrawable(Color.parseColor("#048abf")));
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// TODO Auto-generated method stub
		MenuInflater inflater = getMenuInflater();
		inflater.inflate(R.menu.main, menu);
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
		case R.id.actionbar_search:
			startActivity(new Intent(this,Search.class));
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
