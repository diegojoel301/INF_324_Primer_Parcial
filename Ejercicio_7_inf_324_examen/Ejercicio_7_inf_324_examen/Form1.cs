using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Ejercicio_7_inf_324_examen
{
    public partial class Form1 : Form
    {
       

        public Form1()
        {
            InitializeComponent();

            ServiceReference1.ServiceSoapClient WSClient = new ServiceReference1.ServiceSoapClient();
            DataTable dt = new DataTable();
            DataSet ds = new DataSet();
            ds = WSClient.GetData();

            dataGridView1.DataSource = ds.Tables[0];

            DataGridViewButtonColumn btn_eliminar = new DataGridViewButtonColumn();
            dataGridView1.Columns.Add(btn_eliminar);
            btn_eliminar.HeaderText = "Eliminar";
            btn_eliminar.Text = "Eliminar";
            btn_eliminar.Name = "btn_eliminar";
            btn_eliminar.UseColumnTextForButtonValue = true;

            DataGridViewButtonColumn btn_update = new DataGridViewButtonColumn();
            dataGridView1.Columns.Add(btn_update);
            btn_update.HeaderText = "Actualizar";
            btn_update.Text = "Actualizar";
            btn_update.Name = "btn_update";
            btn_update.UseColumnTextForButtonValue = true;

            departamento.Items.Add("La Paz");
            departamento.Items.Add("Cochabamba");
            departamento.Items.Add("Chuquisaca");
            departamento.Items.Add("Oruro");
            departamento.Items.Add("Potosi");
            departamento.Items.Add("Tarija");
            departamento.Items.Add("Santa Cruz");
            departamento.Items.Add("Beni");
            departamento.Items.Add("Pando");
            

        }


        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            /*
            var senderGrid = (DataGridView)sender;
            
            if (senderGrid.Columns[e.ColumnIndex] is DataGridViewButtonColumn && e.RowIndex >= 0)
            {
                ServiceReference1.ServiceSoapClient WSClient = new ServiceReference1.ServiceSoapClient();

                WSClient.eliminar_registro(dataGridView1.Rows[e.RowIndex].Cells[2].Value.ToString()); 

                dataGridView1.Rows.RemoveAt(dataGridView1.SelectedCells[0].RowIndex);
            }*/
            if (e.ColumnIndex == dataGridView1.Columns["btn_eliminar"].Index)
            {
                if (DialogResult.Yes == MessageBox.Show("Deseas eliminar este registro?", "", MessageBoxButtons.YesNo))
                {
                    ServiceReference1.ServiceSoapClient WSClient = new ServiceReference1.ServiceSoapClient();

                    WSClient.eliminar_registro(dataGridView1.Rows[e.RowIndex].Cells[2].Value.ToString());// Anteriormente 1

                    dataGridView1.Rows.RemoveAt(dataGridView1.SelectedCells[0].RowIndex);
                }
            }
            else if (e.ColumnIndex == dataGridView1.Columns["btn_update"].Index)
            {
                if (DialogResult.Yes == MessageBox.Show("Deseas actualizar este registro?", "", MessageBoxButtons.YesNo))
                {
                    ServiceReference1.ServiceSoapClient WSClient = new ServiceReference1.ServiceSoapClient();
                    test.Text = 
                                dataGridView1.Rows[e.RowIndex].Cells[2].Value.ToString() + " " + 
                                dataGridView1.Rows[e.RowIndex].Cells[3].Value.ToString() + " " + 
                                dataGridView1.Rows[e.RowIndex].Cells[5].Value.ToString() + " " +
                                dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString();
                   /* WSClient.actualizar_registro(dataGridView1.Rows[e.RowIndex].Cells[1].Value.ToString(),
                                                 dataGridView1.Rows[e.RowIndex].Cells[2].Value.ToString(),
                                                 dataGridView1.Rows[e.RowIndex].Cells[3].Value.ToString(),
                                                 dataGridView1.Rows[e.RowIndex].Cells[5].Value.ToString(),
                                                 dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString());*/
                    string dep = "";
                    bool flag = true;
                    if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Chuquisaca"))
                        dep = "01";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("La Paz"))
                        dep = "02";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Cochabamba"))
                        dep = "03";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Oruro"))
                        dep = "04";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Potosi"))
                        dep = "05";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Tarija"))
                        dep = "06";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Santa Cruz"))
                        dep = "07";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Beni"))
                        dep = "08";
                    else if (dataGridView1.Rows[e.RowIndex].Cells[6].Value.ToString().Equals("Pando"))
                        dep = "09";
                    else
                        flag = false;
                    
                    if(flag)
                        WSClient.actualizar_registro(dataGridView1.Rows[e.RowIndex].Cells[2].Value.ToString(),
                                                     dataGridView1.Rows[e.RowIndex].Cells[3].Value.ToString(),
                                                     dataGridView1.Rows[e.RowIndex].Cells[5].Value.ToString(), dep);
                }
            }
        }
        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void insert_data_Click(object sender, EventArgs e)
        {
            ServiceReference1.ServiceSoapClient WSClient = new ServiceReference1.ServiceSoapClient();
            
            DateTime datetime = this.fecha_nacimiento.Value.Date;
            string dep = "";
            bool flag = true;

            if (departamento.Text == "Chuquisaca")
                dep = "01";
            else if (departamento.Text == "La Paz")
                dep = "02";
            else if (departamento.Text == "Cochabamba")
                dep = "03";
            else if (departamento.Text == "Oruro")
                dep = "04";
            else if (departamento.Text == "Potosi")
                dep = "05";
            else if (departamento.Text == "Tarija")
                dep = "06";
            else if (departamento.Text == "Santa Cruz")
                dep = "07";
            else if (departamento.Text == "Beni")
                dep = "08";
            else if (departamento.Text == "Pando")
                dep = "09";
            else
                flag = false;

            if (flag)
            {
                WSClient.nuevo_registro(carnet_identidad.Text, nombre_completo.Text, datetime, telefono.Text, dep);
                //string[] row = new string[] { carnet_identidad.Text, nombre_completo.Text, datetime.ToString(), telefono.Text, dep };
                //dataGridView1.Rows.Add(row);
                DataTable dt2 = new DataTable();
                dt2 = dataGridView1.DataSource as DataTable;
                DataRow datarow;
                datarow = dt2.NewRow();
                datarow["CI"] = carnet_identidad.Text;
                datarow["Nombre Completo"] = nombre_completo.Text;
                datarow["Fecha Nacimiento"] = datetime.ToString();
                datarow["Telefono"] = telefono.Text;
                datarow["Departamento"] = departamento.Text;
                dt2.Rows.Add(datarow);
            }
            

        }
    }
}
